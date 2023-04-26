<?php

namespace app\controllers;

use app\core\Controller;
use app\core\middlewares\AdminMiddleware;


/**
 * Class AdminController
 * 
 *  
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\controllers
*/

class AdminController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['admin_panel']));
    }

    public function admin_panel()
    {
        // TODO: Check if the user role is admin
        $this->setLayout('main');
        return $this->render('/pannel/admin_panel');
    }

    public function users_management()
    {
        $this->setLayout('main');
        return $this->render('/pannel/users_management');
    }

}



?>