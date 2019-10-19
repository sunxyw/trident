<?php

namespace App\Controllers;

use App\Models\User;
use Framework\Authentication;

class AuthController
{
    protected static $className = '_User';

    public function register($username, $password)
    {
        return (new User())->register($username, $password);
    }
}
