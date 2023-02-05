<?php

namespace app\core;
use app\core\Request;

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
    protected array $routes = [];


    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    // Mainly used for mapping every route in our index.php.
    public function get($path,$callback)
    {
        $this->routes['get'][$path] = $callback;
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
            Application::$app->response->setStatusCode(404);
            return 'Page not found.';
        }

        if(is_string($callback)) {
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }

    // Render the view. The "callback" is given from index.php mapping.
    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

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

    protected function renderOnlyView($view)
    {
        ob_start(); // Caching the ouptut of the browser.
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean(); // Stop caching and start returning to the browser.
    }
}

?>