<?php

require_once __DIR__ . '/../controllers/UserController.php';

use controllers\UserController as UserController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$pdo = new PDO("mysql:host=localhost;dbname=effective;charset=utf8mb4", "root", "");

$controller = new UserController($pdo);

if ($uri === '/users' && $method === 'GET') {
    $controller->index();
    return;
}