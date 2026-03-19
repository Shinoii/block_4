<?php

namespace Controllers;
use PDO;

class UserController
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `users`");
        $stmt->execute();
        $users = $stmt->fetchAll();
        require __DIR__ . "/../views/home.php";
    }
}