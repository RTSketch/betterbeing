<?php 
namespace BetterBeing\Controllers;

use BetterBeing\Models\User;
use BetterBeing\Validation\Validator;
use duncan3dc\Laravel\Blade;

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
            'username' => 'length:1',
            'firstname' => 'length:1',
            'surname' => 'length:1',
            'email1' => 'email|equalTo:email2',
            'email2' => 'email',
            'password1' => 'min:8|equalTo:password2',
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
        $user->email = $_REQUEST['email1'];
        $user->password = password_hash($_REQUEST['password1'], PASSWORD_DEFAULT);

        $user->save();
    
        echo "Posted!";
    }
    
}