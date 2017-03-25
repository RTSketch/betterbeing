<?php 
namespace BetterBeing\Controllers;

use BetterBeing\Models\User;
use BetterBeing\Validation\Validator;

class RegisterController extends BaseController
{
    
    public function getShowRegisterPage()
    {
        //include(__DIR__ . "/../../views/register.html");
        echo $this->twig->render('register.html');
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
        
/*
    
        $errors = [];
        
        if (Validator::stringType()->length(1)->validate($_REQUEST['firstname']) == false){
            $errors[] = "You must enter a first name!";
        }
        if (Validator::stringType()->length(1)->validate($_REQUEST['surname']) == false){
              $errors[] = "You must enter a surname!";
        }
        if (Validator::email()->validate($_REQUEST['email1']) == false){
            $errors[] = "You must enter a valid email address!";
        }
        if (Validator::equals($_REQUEST['email1'])->validate($_REQUEST['email2']) == false){
            $errors[] = 'Email and verify email do not match!';
        }
        if (Validator::equals($_REQUEST['password1'])->validate($_REQUEST['password2']) == false){
            $errors[] = 'Password and verify password do not match!';
        }

        print_r($errors);
        exit;
        
*/
        
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
    
    public function getTestDB()
    {
        $user = User::find(1);
        echo "User's name is " . $user->first_name . " " . $user->last_name;
    }
    
    
    
    
    /*
    public function getTestDB() {
        try{
            $conn = new PDO("pgsql:host=localhost dbname=test", "postgres", "secret");
        } catch (PDOException $pe) {
            die("Connection error: " . $pe->getMessage());
        }
        
        $first_name = "";
        
        $sql = "
            select * from users where id = 1
        ";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($rows as $row) {
            $first_name = $row['first_name'];
        }
        
        echo "It works! First name is " . $first_name;
    }
    */
    
}