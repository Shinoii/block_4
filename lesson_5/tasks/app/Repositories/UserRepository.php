<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers(): Collection
    {
        return User::all();
    }
    public function getUserById(int $id): User
    {
        return User::findOrFail($id);
    }
    public function createUser(string $name, string $email, string $password): User
    {
        return User::create(
            [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]
        );
    }
    public function updateUser(int $id, array $data): bool
    {
        return $this->getUserById($id)->update($data);
    }
    public function deleteUser(int $id): bool
    {
        return $this->getUserById($id)->delete();
    }
}
