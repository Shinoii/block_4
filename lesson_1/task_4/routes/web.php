<?php

require_once __DIR__ . '/../controllers/UserController.php';

use controllers\UserController as UserController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$controller = new UserController();

if ($uri === '/users' && $method === 'GET') {
    $controller->index();
    return;
}