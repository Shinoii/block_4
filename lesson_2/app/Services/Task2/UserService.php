<?php
namespace App\Services\Task2;

use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function __construct(private UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function getUsers(): Collection
    {
        return $this->userRepository->getUsers();
    }
}
