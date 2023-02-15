<?php

namespace app\controllers;

use app\core\Controller;

/**
 * Class AuthController
 * 
 *  
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class AuthController extends Controller
{
    
    public function login()
    { 
        return $this->render('login');
    }

    public function register()
    {
        return $this->render('register');
    }
}


?>