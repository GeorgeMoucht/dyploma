<?php

use app\core\Model;

/**
 * 
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/


class LoginForm extends Model
{


    public string $email;
    public string $password;


    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED,self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED,]
        ];
    }

    public function login()
    {
        $user = User::findOne(['email' => $this->email]);
        if (!user)
        {
            $this->addError('email', 'User does not exist with this email');
        }

        Application::$app->login();
    }
}

?>