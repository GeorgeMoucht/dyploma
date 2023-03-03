<?php

namespace app\core;
use app\core\Router;
use app\core\Request;
use app\core\Response;
use app\core\Controller;

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
    public static string $ROOT_DIR; // This variable is used to store the root path of the hole application.
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    // We initialize the $app inside the Application object so we can access it from other classes of core
    public static Application $app;
    public Database $db;

    public function __construct($rootPath, array $config)
    {

        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request , $this->response);
    
        $this->db = new Database($config['db']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }
}

?>