<?php


namespace App\classes;


class User
{
    public $users = [];

    public function __construct()
    {
        $this->users = [
            0 => [
                'id' => 1,
                'name' => 'jahid hasan',
                'user_name' => 'jahid',
                'password' => '123456',
            ],

            1 => [
                'id' => 2,
                'name' => 'farhad mia',
                'user_name' => 'farhad',
                'password' => '456789',
            ],

            2 => [
                'id' => 3,
                'name' => 'Ifte uddin',
                'user_name' => 'ifte',
                'password' => '123123',
            ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }

}