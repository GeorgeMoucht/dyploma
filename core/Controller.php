<?php

namespace app\core;
use app\core\Application;



/**
 * Class Controller
 *  
 * This is the base controller class. It is the class that help
 * with the communication between the core and controllers.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class Controller
{

    public function render($view , $params = [])
    {
        return Application::$app->router->renderView($view , $params);
    }

}