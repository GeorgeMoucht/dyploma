<?php

namespace app\core;
use app\core\Application;



/**
 * Class Controller
 *  
 * This is the base controller class. It is the class that help
 * with the communication between the core and controllers.
 * Also provides basic functions for every of our controllers.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class Controller
{
    public string $layout = 'main';

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    // Params are the error messages that we need to echo messages into front-end of the user.
    // Also we pass user data through $params, so we can have user data on every page that we render.
    public function render($view , $params = [])
    {
        return Application::$app->router->renderView($view , $params);
    }

}