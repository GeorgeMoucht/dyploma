<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

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
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        //If request is post, we need to handle the posted date from user
        if($request->isPost()) {
            return 'Handle sudmitted data of login form';
        }
        
        $this->setLayout('auth');   
        //Just render the form if the request of user is GET.
        return $this->render('register');
    }
}


?>