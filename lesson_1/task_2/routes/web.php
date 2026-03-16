<?php

require_once __DIR__ . '/../controllers/UserController.php';

use models\User as UserModel;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/users' && $method === 'GET') {
    UserModel::getAll();
    return;
}