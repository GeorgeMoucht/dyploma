<?php


namespace app\core\form;


use app\core\Model;

/**
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\form
*/


class Form
{

    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    // By callback we mean the Placeholder class.
    public function field(Model $model, $attribute, $callback)
    {
        return new Field($model, $attribute, $callback);
    }
}