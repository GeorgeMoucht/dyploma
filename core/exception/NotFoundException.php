<?php

namespace app\core\exception;


/**
 * Class NotFoundException
 *  
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\exception
*/

class NotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = 'Page not found.';
}


?>