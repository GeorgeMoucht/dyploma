<?php


namespace app\core;

/**
 * 
 * 
 * It contains all the core model functions for our child model classes.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

class Model
{
    public function loadData($data)
    {
        foreach($data as $key => $value) {
            if(property_exists($this , $key)) {
                $this->{key} = $value;
            }
        }
    }

    public function validate()
    {

    }
}

?>