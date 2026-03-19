<?php

namespace Services;

use Models\User;

class UserService
{
    public function getUsers()
    {
        $userModel = new User();
        return $userModel->getAll();
    }
}