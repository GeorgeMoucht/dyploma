<?php

/**
 * Class m2_assign_role_to_user
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package
*/


class m2_assign_role_to_user
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE users
                ADD COLUMN role VARCHAR(255) NOT NULL AFTER password;";
        $db->pdo->exec($SQL);
    }


    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE users
                DROP COLUMN role;";
        $db->pdo->exec($SQL);    
    }
}

?>