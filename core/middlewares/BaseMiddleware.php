<?php

namespace app\core\middlewares;


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

abstract class BaseMiddleware
{

    abstract public function execute();
}


?>