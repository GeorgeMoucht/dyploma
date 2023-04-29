<?php

namespace app\core\table;

/**
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\table
*/

class Table
{
    protected $data;    // Table data
    protected $attributes;  // Table attributes

    public function __construct($data, $attributes)
    {
        $this->data = $data;
        $this->attributes = $attributes;
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        
        // echo "<pre>";
        // var_dump($attributes);
        // echo "</pre>";
        
    }

    public function generate()
    {
        $html = '<table>';
        $html .= '<tr>';
        foreach($this->attributes as $value) {
            $html .= '<th>' . htmlspecialchars($value) . '</th>';
        }
        $html .= '</tr>';
        foreach($this->data as $row)
        {
            $html .= '<tr>';
            foreach ($row as $key => $value) {
                $html .= '<td>' . htmlspecialchars($value) . '</td>';
            }
            $html .= '</tr>';
        }
        // foreach($this->data as $value) {
        // {
        //     $html .= '<tr>';
        //     $html .= '<th>' . htmlspecialchars($value) . '</th>';
        //     $html .= '</tr>';
        // }
        $html .= '</table>';
        return $html;
    }
    // public static function begin()
    // {
    //     echo '<table>';
    //     return new  Table();
    // }

    // public static function end()
    // {
    //     echo '</table>';
    // }

    // public function row(Array $dataArray)
    // {
    //     echo "<pre>";
    //     var_dump($dataArray);
    //     echo "</pre>";
    // }



}


?>