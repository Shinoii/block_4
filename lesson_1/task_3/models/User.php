<?php

namespace models;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `users`");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}