<?php


namespace App\classes;

use App\classes\User;


class Auth
{
    public $userName, $password, $user, $users, $check;

    public function __construct($post)
    {
        $this->userName = $post['user_name'];
        $this->password = $post['password'];
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        $this->check = false;

        foreach ($this->users as $user) {
            if ($user['user_name'] == $this->userName && $user['password'] == $this->password) {
                session_start();
                $_SESSION['name'] = $user['name'];
                $_SESSION['id'] = $user['id'];
                $this->check = true;
            }
        }

        if ($this->check) {
            header("Location:action.php?page=dashboard");
        } else {
            header("Location:action.php?page=login&&message=Invalid credential");
        }

    }

}