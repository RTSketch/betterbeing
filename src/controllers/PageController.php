<?php 
namespace BetterBeing\Controllers;

use duncan3dc\Laravel\Blade;
use BetterBeing\Models\Page;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
        echo Blade::render("home");
    }

//    public function getShowRegisterPage()
//    {
//        echo Blade::render("register");
//    }
    
    public function getShowPage()
    {
        $browser_title = "";
        $page_content = "";
        // extract page name form url
        $uri = explode("/", $_SERVER['REQUEST_URI']);
        $target = $uri[1];
        
        // find matching page in the db
        $page = Page::where('slug', '=', $target)->get();
        
        // look up page content
        foreach ($page as $item) {
            $browser_title = $item->browser_title;
            $page_content = $item->page_content;

        }
        
        if(strlen($browser_title) == 0) {
            header("Location: /page-not-found");
            exit();
        }
        
        // pass content to some blade template
        echo Blade::render('generic-page', [
           'browser_title' => $browser_title,
           'page_content' => $page_content,
        ]);
    }
    
    public function getShow404()
    {
        header("HTTP/1.0 404 Not Found");
        echo Blade::render('page-not-found');
    }
    
}