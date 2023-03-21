<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

/**
 * Class Database
 *  
 * This is the core database class of our application.
 * In this class, we establish the connection to the database
 * by reading the .env file.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\middlewares
*/

class AuthMiddleware extends BaseMiddleware
{

    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if(Application::isGuest()) {
            if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}


?>