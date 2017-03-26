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
            //$_SESSION['msg'] = $errors;
            //header ("Location: /register");
            echo $this->twig->render('register.html', ['errors' => $errors]);
            exit();
        }
        
        // if validation fails, go back to register page
        // and display error message
        
        // save this data into a database
        $user = new User;
        $user->first_name = $_REQUEST['firstname'];
        $user->last_name = $_REQUEST['surname'];
        $user->email = $_REQUEST['email1'];
        $user->password = password_hash($_REQUEST['password1'], PASSWORD_DEFAULT);

        $user->save();
    
        echo "Posted!";
    }
    
}