<?php
namespace app\core;

use app\core\DbModel;
/**
 * Class UserModel
 * 
 * All about session array.
 * 
 * @author GeorgeMoucht <georgemoucht@gmail.com>
 * @package app/core;
*/

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

}
?>