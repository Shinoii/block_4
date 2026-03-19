<?php

namespace Routes;

use Models\User as UserModel;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/users' && $method === 'GET') {
    UserModel::getAll();
    return;
}