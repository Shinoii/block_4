<?php

namespace controllers;
require_once __DIR__ . '/../services/UserService.php';

use services\UserService;

class UserController
{
    private UserService $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->getUsers();
        require __DIR__ . "/../views/home.php";
    }
}