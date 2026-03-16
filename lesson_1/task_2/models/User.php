<?php

namespace models;

use PDO;

class User
{
    public static function getAll()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=effective;charset=utf8mb4", "root", "");
        $stmt = $pdo->prepare("SELECT * FROM `users`");
        $stmt->execute();
        print_r($stmt->fetchAll());
    }
}