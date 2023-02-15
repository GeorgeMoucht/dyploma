<?php

namespace app\core;
use app\core\Request;
use app\core\Response;

/**
 * Class Router
 * 
 * This class is responsible for mapping all the routes (pages) of our application.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

Class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];


    public function __construct(Request $request , Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    // Mainly used for mapping every route in our index.php.
    public function get($path,$callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path,$callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    // Resolve the given URL path
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        // echo '<pre>';
        // var_dump($this->routes);
        // echo '</pre>';
        // exit;
        // var_dump($callback);exit;
        if($callback === false){
            /**
              * if callback is false it means that there isn't any $path (url
              * that match with initialization of index.php
            */
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }

        if(is_string($callback)) {
            return $this->renderView($callback);
        }

        if(is_array($callback)) {
            /**
             * Initialize the callback as an object.
             * In our case if we see index.php we use the SiteController object.
             */
            $callback[0] = new $callback[0];
        }
        
        return call_user_func($callback , $this->request);
    }

    // Render the view. The "callback" is given from index.php mapping.
    public function renderView($view , $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view , $params);

        return str_replace('{{content}}' , $viewContent , $layoutContent);
    }

    // Load layout based on given view that user asked to be rendered.
    // We need to read layout as a string and replace {{contact}}
    // with the requested view. Then echo it to the browser.
    protected function layoutContent()
    {
        ob_start(); // Caching the output of the browser.
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean(); // Stop caching and start returning to the browser.
    }

    protected function renderOnlyView($view , $params)
    {
        // Pass the parameters from SiteController class to the callback view.
        foreach ($params as $key => $value)
        {
            // If key exists, initialize variable with the name of key.
            $$key = $value;
        }   

        ob_start(); // Caching the ouptut of the browser.
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean(); // Stop caching and start returning to the browser.
    }
}

?>