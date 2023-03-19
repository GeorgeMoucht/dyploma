<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;

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
        $user = new User();

        //If request is post, we need to handle the posted date from user
        if($request->isPost()) {
            $user->loadData($request->getBody());  // Pass all data from register form to the register model

            if($user->validate() && $user->save()) {
                
                Application::$app->response->redirect('/');
            }
        
            // return 'Handle sudmitted data of login form';
            return $this->render('register' , [
                'model' => $user
            ]);
        }
        
        $this->setLayout('auth');   
        //Just render the form if the request of user is GET.
        return $this->render('register' , [
            'model' => $user
        ]);
    }
}


?>