<?php

namespace app\core;
use app\core\Router;
use app\core\Request;
use app\core\Session;
use app\core\Response;
use app\core\DbModel;
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
    
    public string $userClass;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public Session $session;
    // We initialize the $app inside the Application object so we can access it from other classes of core
    public static Application $app;
    public ?DbModel $user;
    public Database $db;

    public function __construct($rootPath, array $config)
    {
        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->session = new Session();
        $this->response = new Response();
        $this->router = new Router($this->request , $this->response);
    
        $this->db = new Database($config['db']);

        //Fetch the user between every page if he is authenticated.
        $primaryValue = $this->session->get('user');
        if($primaryValue) {
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);    
        }
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

    public function login(DbModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
}

?>