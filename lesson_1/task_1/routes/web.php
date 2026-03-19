<?php
namespace Routes;

use Controllers\UserController;
use PDO;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$pdo = new PDO("mysql:host=localhost;dbname=effective;charset=utf8mb4", "root", "Rfgbnjirf5891");

$controller = new UserController($pdo);

if ($uri === '/users' && $method === 'GET') {
    $controller->index();
    return;
}