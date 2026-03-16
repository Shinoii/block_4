<?php

namespace services;
require_once __DIR__ . '/../repositories/UserRepository.php';

use repositories\UserRepository;

class UserService
{
    private UserRepository  $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function getUsers(): array
    {
        return $this->userRepository->getUsers();
    }
}