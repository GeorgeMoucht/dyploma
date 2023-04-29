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

    public static function findAll()
    {
        $tableName = static::tableName();
        // $attributes = array_keys($where);

        $statement = self::prepare("SELECT id, firstname, email, created_at FROM $tableName");

        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function assignDefaultRole()
    {
        $tableName = static::tableName();

        $statement = self::prepare("SELECT * FROM $tableName;");

        $statement->execute();

        return $statement->fetchObject(static::class);
    }

}
?>