<?php

namespace repositories;

use PDO;

class UserRepository
{
    private  $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getUsers(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}