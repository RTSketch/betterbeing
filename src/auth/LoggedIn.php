<?php
namespace BetterBeing\Auth;

use BetterBeing\Models\User;

class Loggedin
{
    public function user()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            return $user;
        } else {
            return false;
        }
    }
}