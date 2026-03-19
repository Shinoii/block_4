<?php

namespace Routes;

use Controllers\UserController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$controller = new UserController();

if ($uri === '/users' && $method === 'GET') {
    $controller->index();
    return;
}