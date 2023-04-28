<?php

namespace app\models;

use app\core\UserModel;

/**
 * Class User
 * 
 * The user model class.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\models
*/


class User extends UserModel
{

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';
    const ROLE_TEACHER = 'teacher';

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public int $status = self::STATUS_INACTIVE;
    public string $password = '';
    public string $confirmPassword = '';
    public string $role = '';


    public static function tableName(): string
    {
        return 'users';
    }

    public static function primaryKey(): string
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
        if(!self::assignDefaultRole()) {    // The first register user is created as Admin.
            // echo "table is null";
            $this->role = self::ROLE_ADMIN;
        } else {
            // echo "users exists";
            $this->role = self::ROLE_USER;
        }
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
        return ['firstname', 'lastname', 'email', 'password', 'role', 'status'];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getDisplayEmail(): string
    {
        return $this->email;
    }
}


?>