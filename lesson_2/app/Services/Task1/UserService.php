<?php
namespace App\Services\Task1;
use App\Models\User;

class UserService
{
    public function getUsers()
    {
        return User::all();
    }
}
