<?php


namespace app\core\table;

// $usersArray

class Row
{
    public Array $dataArray;

    public function __construct(Array $dataArray)
    {
        $this->dataArray = $dataArray;
        echo "<pre>";
        var_dump($dataArray);
        echo "</pre>";
    }
}