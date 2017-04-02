<?php 
namespace BetterBeing\Controllers;

use BetterBeing\Models\User;
use BetterBeing\Validation\Validator;
use duncan3dc\Laravel\Blade;
use BetterBeing\Email\SendEmail;
use BetterBeing\Models\UserPending;

class RegisterController extends BaseController
{
    
    public function getShowRegisterPage()
    {
        echo Blade::render("register");
    }
    
    public function postShowRegisterPage()
    {
        $errors = [];
        
        $validation_data = [
            'username' => 'length:1|unique:User',
            'firstname' => 'length:1',
            'surname' => 'length:1',
            'email' => 'email|equalTo:email2|unique:User',
            'email2' => 'email',
            'password' => 'min:8|equalTo:password2',
        ];
        // validate data
        
        $validator = new Validator;
        
        $errors = $validator->isValid($validation_data);
        
        
        if (sizeof($errors) > 0)
        {
            $_SESSION['msg'] = $errors;
           // echo $this->twig->render('register.html', ['errors' => $errors]);
            echo Blade::render("register");
            unset($_SESSION['msg']);
            exit();
        }
        
        // if validation fails, go back to register page
        // and display error message
        
        // save this data into a database
        $user = new User;
        $user->username = $_REQUEST['username'];
        $user->first_name = $_REQUEST['firstname'];
        $user->last_name = $_REQUEST['surname'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();
        
        $token = md5(uniqid(rand(), true)) . md5(uniqid(rand(), true));
        $user_pending = new UserPending;
        $user_pending->token = $token;
        $user_pending->user_id = $user->id;
        $user_pending->save();
        
        
        $message = Blade::render('emails.welcome-email',
            ['token' => $token]
        );
        
        SendEmail::sendEmail($user->email, "Welcome to Better Being!", $message);
        
        header("Location: /success");
        exit();
    }
    
    
    public function getVerifyAccount()
    {
        $user_id = 0;
        $token = $_GET['token'];
        
        // look up the token
        $user_pending = UserPending::where('token', '=', $token)->get();
        
        foreach($user_pending as $item){
            $user_id = $item->user_id;
        }
        
        if ($user_id > 0){
            //make the user account active
            $user = User::find($user_id);
            $user->active = 1;
            $user->save();
            
            UserPending::where('token', '=', $token)->delete();
            
            header("Location: /account-activated");
            exit();
        } else {
            header("Location: /page-not-found");
            exit();
        }
    }
}