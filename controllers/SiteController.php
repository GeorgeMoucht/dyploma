<?php
namespace app\controllers;


use app\core\Controller;
use app\core\Request;
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

    // Manipulation of post/get date from contact view.
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        // $body = Application::$app->request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return 'Handling Submited date';
    }
}

?>