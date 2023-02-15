<?php
namespace app\controllers;


use app\core\Controller;
/**
 * Class SiteController
 *  * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\controllers
*/

class SiteController extends Controller
{
    // Render home view
    public function home()
    {
        $params = [
            'name' =>'George'
        ];

        return $this->render('home',$params);
    }


    // Render contact view
    public function contact()
    {
        return $this->render('contact');
    }

    // Manipulation of posted date from contact view.
    public function handleContact()
    {
        return 'Handling Submited date';
    }
}

?>