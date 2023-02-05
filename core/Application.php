<?php

namespace app\core;
use app\core\Router;
use app\core\Request;

/**
 * Class Application
 * 
 * If this class had a 'nickname', for sure it would be called as 'the brain'.
 * The usage of this class is to use every class of our core classes.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

Class Application
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}

?>