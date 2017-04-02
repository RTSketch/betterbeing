<?php
namespace BetterBeing\Controllers;

use duncan3dc\Laravel\Blade;
use BetterBeing\Models\Applications;
use BetterBeing\Validation\Validator;
use BetterBeing\Auth\LoggedIn;

class BrowseApplicationsController extends BaseController
{
    public function getShowBrowseApplications()
    {
        $browseapplications = Applications::all();
        
        echo Blade::render('browse-applications', [
           'browseapplications' => $browseapplications,
        ]);
    }
    
    
}