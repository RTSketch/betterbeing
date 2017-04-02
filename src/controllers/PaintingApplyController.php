<?php
namespace BetterBeing\Controllers;

use duncan3dc\Laravel\Blade;
use BetterBeing\Models\Applications;
use BetterBeing\Validation\Validator;
use BetterBeing\Auth\LoggedIn;

class PaintingApplyController extends BaseController
{
    public function getShowAdd()
    {
        echo Blade::render('painting-apply');
    }
    
    public function postShowAdd()
    {
        $errors = [];
        
        $validation_data = [
            'title' => 'length:1',
            'description' => 'length:1',
            'imgurl' => 'length:1',
        ];
        // validate data
        
        $validator = new Validator;
        
        $errors = $validator->isValid($validation_data);
        
        
        if (sizeof($errors) > 0)
        {
            $_SESSION['msg'] = $errors;
           // echo $this->twig->render('register.html', ['errors' => $errors]);
            echo Blade::render("painting-apply");
            unset($_SESSION['msg']);
            exit();
        }
        
        $application = new Applications;
        $application->title = $_REQUEST['title'];
        $application->description = $_REQUEST['description'];
        $application->img_url = $_REQUEST['imgurl'];
        $application->user_id = LoggedIn::user()->id;
        $application->save();
        
        header("Location: /application-posted");
        exit();
    }
}