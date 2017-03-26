<?php 
namespace BetterBeing\Controllers;

use duncan3dc\Laravel\Blade;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
        echo Blade::render("home");
    }

    public function getShowRegisterPage()
    {
        echo Blade::render("register");
    }
    
}