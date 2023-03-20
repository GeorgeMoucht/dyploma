<?php

namespace app\models;

use app\core\DbModel;

/**
 * Class User
 * 
 * The user model class.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\models
*/


class User extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public int $status = self::STATUS_INACTIVE;
    public string $password = '';
    public string $confirmPassword = '';


    public static function tableName(): string
    {
        return 'users';
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public function labels(): array
    {
        return [
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm your password'
        ];
    }

    // Override the save() method from DbModel so we can encrypt the password 
    // attribute before the push to db.
    public function save()
    {
        $this->status = self::STATUS_INACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    // Validation rules.
    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED , self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class,
            ]],
            'password' => [self::RULE_REQUIRED , [self::RULE_MIN , 'min' => 8] , [self::RULE_MAX , 'max'=> 24]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH , 'match' => 'password']],
        ];
    }

    public function attributes(): array {
        return ['firstname', 'lastname', 'email', 'password', 'status'];
    }

}


?>