<?php
namespace app\core;


/**
 * Class Response
 * 
 * Response class is responsible to handle status codes. For example 404 status on non-existing page.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class Response
{

    // Set error code.
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: '.$url);
    }
}

?>