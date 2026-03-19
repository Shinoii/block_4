<?php
namespace App\Repositories\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function getUsers(): Collection;
    public function getUserById(int $id): User;
    public function createUser(string $name, string $email, string $password): User;
    public function updateUser(int $id, array $data): bool;
    public function deleteUser(int $id): bool;
}
