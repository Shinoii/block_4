<?php

namespace controllers;
require_once __DIR__ . '/../services/UserService.php';

use services\UserService as UserService;

class UserController
{
    public function index()
    {
        $users = UserService::getUsers();
        require __DIR__ . "/../views/home.php";
    }
}