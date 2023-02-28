<?php

namespace app\models;

use app\core\Model;

/**
 * Class RegisterModel
 * 
 * The user model class.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\models
*/


class RegisterModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register()
    {
        echo "Creating this user.";
    }


}


?>