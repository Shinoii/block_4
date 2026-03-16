<?php

namespace services;

require_once __DIR__ . '/../models/User.php';
use models\User;


class UserService
{
    public static function getUsers()
    {
        $userModel = new User();
        return $userModel->getAll();
    }
}