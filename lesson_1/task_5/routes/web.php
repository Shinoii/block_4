<?php

require_once __DIR__ . '/../controllers/UserController.php';
require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../repositories/UserRepository.php';

use controllers\UserController as UserController;
use services\UserService as UserService;
use repositories\UserRepository as UserRepository;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$pdo = new PDO("mysql:host=localhost;dbname=effective;charset=utf8mb4", "root", "");

$userRepository = new UserRepository($pdo);
$userService = new UserService($userRepository);
$controller = new UserController($userService);

if ($uri === '/users' && $method === 'GET') {
    $controller->index();
    return;
}