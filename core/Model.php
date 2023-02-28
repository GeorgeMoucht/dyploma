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

abstract class Model
{
    // Read data that are posted by the user.
    public function loadData($data)
    {
        foreach($data as $key => $value) {
            /* Note:
                * As opposed with isset(), property_exists() returns true
                * even if the property has the value of null.
                * Sometimes we want that so we can echo errors if the property is null.
            */
            if(property_exists($this , $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate()
    {

    }
}

?>