<?php


namespace app\core\form;


use app\core\Model;
use app\core\form\Placeholder;

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

    public function field(Model $model, $attribute, $placeholder)
    {
        if(is_string($placeholder))
        {
            echo "string";exit;
        }

        if(is_array($placeholder))
        {
            echo "array";
            echo "<pre></pre>";
            var_dump("placeholder");
            exit;

        }
        return new Field($model, $attribute, $placeholder);
    }
}