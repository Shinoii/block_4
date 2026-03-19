<?php

namespace Controllers;

use Services\UserService;

class UserController
{
    public function index()
    {
        $userService = new UserService();
        $users =  $userService->getUsers();
        require __DIR__ . "/../views/home.php";
    }
}