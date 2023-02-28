<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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
        $registerModel = new RegisterModel();

        //If request is post, we need to handle the posted date from user
        if($request->isPost()) {
            $registerModel->loadData($request->getBody());  // Pass all data from register form to the register model

            if($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }

            echo '<pre>';
            var_dump($registerModel->errors);
            echo '</pre>';
            exit;

        
            // return 'Handle sudmitted data of login form';
            return $this->render('register' , [
                'model' => $registerModel
            ]);
        }
        
        $this->setLayout('auth');   
        //Just render the form if the request of user is GET.
        return $this->render('register' , [
            'model' => $registerModel
        ]);
    }
}


?>