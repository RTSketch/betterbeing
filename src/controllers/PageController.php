<?php 
namespace BetterBeing\Controllers;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
        //include(__DIR__ . "/../../views/home.html");
        echo $this->twig->render('home.html');
    }

}