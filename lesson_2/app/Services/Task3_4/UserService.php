<?php
namespace App\Services\Task3_4;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {}

    public function getUsers(): Collection
    {
        return $this->userRepository->getUsers();
    }
}
