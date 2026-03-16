<?php

namespace App\Services;
use App\Models\User;
use App\Services\Contracts\UserServiceInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserService implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ){}

    public function getAll(): Collection
    {
        return $this->userRepository->getUsers();
    }
    public function getById(int $id): User
    {
        return $this->userRepository->getUserById($id);
    }
    public function create(array $data): User
    {
        $password = bcrypt($data['password']);
        return $this->userRepository->createUser($data['name'], $data['email'], $password);
    }
    public function update(int $id, array $data): bool
    {
        return $this->userRepository->updateUser($id, $data);
    }
    public function delete(int $id): bool
    {
        return $this->userRepository->deleteUser($id);
    }
}
