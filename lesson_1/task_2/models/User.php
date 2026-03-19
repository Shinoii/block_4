<?php

namespace Models;

use PDO;
class User
{
    public static function getAll(): array
    {
        $pdo = new PDO("mysql:host=localhost;dbname=effective;charset=utf8mb4", "root", "Rfgbnjirf5891");
        $stmt = $pdo->prepare("SELECT * FROM `users`");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}