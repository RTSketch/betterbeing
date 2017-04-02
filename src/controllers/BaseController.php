<?php 
namespace BetterBeing\Controllers;

use duncan3dc\Laravel\BladeInstance;

class BaseController
{
    protected $blade;
    
    public function __contsruct()
    {
        $this->blade = new BladeInstance("/vagrant/views", "/vagrant/cache/views");
    }
}