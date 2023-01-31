<?php

namespace app\core;

/**
 * Class Request
 * 
 * This class will handle all the requests made from the URL that user provide us.
 * Mainly used from Application class.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class Request
{

    //Return requested path from URL (contact and login page)
    public function getPath()
    {
        //Take everything before "?" from REQUEST_URI
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path,'?');  //if there is no "?" will return FALSE
        if($position === false) {
            // If the position is false, it means that Url doesn't pass any parameters. So we just return the $path.
            return $path; 
        }
        // Return the sub-string of path variable, starting from the beggining of the path until the '?' character.
        return substr($path, 0 , $position);

    }

    //Return requested method from URL (GET or POST)
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}

?>