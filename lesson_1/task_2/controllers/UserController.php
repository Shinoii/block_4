<?php

namespace Controllers;

use Models\User as UserModel;

class UserController
{
    private UserModel $userModel;
    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }
    public function index()
    {
        $users = $this->userModel->getAll();
        require __DIR__ . "/../views/home.php";
    }
}