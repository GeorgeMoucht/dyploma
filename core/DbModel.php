<?php

namespace app\core;

use app\core\Model;

/**
 * Class DbModel
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

abstract class DbModel extends Model
{
    abstract public static function tableName(): string;
    abstract public function attributes(): array;
    abstract public static function primaryKey(): string;

    public function save()
    {
        $tableName = $this->tableName();
        //List of attributes that we will push into database.
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);

        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).")
            VALUES (".implode(',', $params ).")");

        foreach($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        
        $attributes = array_keys($where);

        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        
        //Bind params
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }

        $statement->execute();

        // Return the instance of the user class.
        return $statement->fetchObject(static::class);
    }

    public static function findAll($columns = ['*'])
    {
        $tableName = static::tableName();
        $selectedColumns = implode(', ', $columns);
        $query = "SELECT $selectedColumns FROM $tableName";
        $statement = self::prepare($query);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }


}

?>