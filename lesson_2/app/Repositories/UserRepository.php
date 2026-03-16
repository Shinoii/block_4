<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers(): Collection
    {
        return User::all();
    }
}
