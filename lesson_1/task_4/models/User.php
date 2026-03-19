<?php

namespace Models;

use PDO;
class User
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = new PDO(
            "mysql:host=localhost;dbname=effective;charset=utf8mb4", "root", ""
        );
    }
    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `users`");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}