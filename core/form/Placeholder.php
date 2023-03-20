<?php


namespace app\core\form;


use app\core\Model;

/**
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\form
*/


class Placeholder
{

    public function register()
    {
        return [
            'firstname' => 'Enter your first name',
            'lastname' => 'Enter your last name',
            'email' => 'Enter your email address',
            'password' => 'Enter your password',
            'confirmPassword' => 'Repeat you password again'
        ];
    }

    public function login()
    {
        return [
            'email' => 'Enter your email address.',
            'password' => 'Enter your password.'
        ];
    }

}

