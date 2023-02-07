<?php
namespace app\controllers;
use app\core\Controller;

/**
 * Class SiteController
 *  * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class SiteController extends Controller
{
    // Render home view
    public static function home()
    {
        $params = [
            'name' =>'George'
        ];

        return $this->render('home' , $params);
    }


    // Render contact view
    public static function contact()
    {
        return $this->render('contact');
    }

    // Manipulation of posted date from contact view.
    public static function handleContact()
    {
        return 'Handling Submited date';
    }
}

?>