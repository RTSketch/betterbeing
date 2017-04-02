<?php 
namespace BetterBeing\Controllers;

use BetterBeing\Models\User;
use BetterBeing\Validation\Validator;
use duncan3dc\Laravel\Blade;
use BetterBeing\Auth\LoggedIn;

class AuthenticationController extends BaseController
{
    
    public function postShowLoginPage()
    {
        $okay = true;
        $email = $_REQUEST['login-email'];
        $password = $_REQUEST['login-password'];
        
        // look up the user
        $user = User::where('email', '=', $email)
            ->first();
        
        if ($user != null) {
            // validate credentials
            if (!password_verify($password, $user->password)) 
            {
                $okay = false;
            }
            if($user->active == 0){
                $okay = false;
            }
        } else {
            $okay = false;
        }
        

        
        // if valid, log them in
        if ($okay) {
            $_SESSION['user'] = $user;
            header("Location: /");
            exit();
        } else {
        // if not valid, redirect to login page
            $_SESSION['msg'] = ["Invalid login!"];
            echo Blade::render('home');
            unset($_SESSION['msg']);
            exit();
        }
        
    }
    
    public function getLogout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header("Location: /");
        exit();
    }
    

    
}

// $user = $_SESSION['user'];
// dd($user->username);
// dd($user->email);
// dd($user->testimonials);

//public function getTestUser()
//{
//    dd(LoggedIn::user()->username);
//}