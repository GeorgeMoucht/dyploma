<?php
namespace app\controllers;


use app\core\Controller;
use app\core\Request;
/**
 * Class SiteController
 * 
 * This class is responsible for handling the data
 * that are passed from the model,
 * and data that are post from user
 * to be used.
 * 
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

    // Render courses view
    public function courses()
    {
        return $this->render('courses');
    }

    // Manipulation of post/get date from contact view.
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        
        return 'Handling Submited date';
    }
}

?>