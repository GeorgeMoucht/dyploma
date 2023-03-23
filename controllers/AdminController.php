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
        $this->setLayout('main');
        return $this->render('admin_panel');
    }

}



?>