<?php

namespace app\core\table;

use app\core\Model;

/**
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\form
*/

class Table
{
    public static function begin()
    {
        echo '<table>';
        return new  Table();
    }

    public static function end()
    {
        echo '</table>';
    }

    public function row(Array $dataArray)
    {
        return new Row($dataArray);
    }
}


?>