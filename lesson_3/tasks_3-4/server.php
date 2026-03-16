<?php

use React\Http\Browser;
use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;

require 'vendor/autoload.php';

$server = new HttpServer(function (ServerRequestInterface $request) {
});

$socket = new SocketServer('127.0.0.1:8080');
$server->listen($socket);

function task3(){
    $browser = new Browser();

    $browser->get('https://jsonplaceholder.typicode.com/todos/1')
        ->then(
            function ($response) {
                echo "Основной запрос, задача:\n";
                echo $response->getBody()->getContents() . PHP_EOL;
            },
            function ($error) {
                echo "Ошибка запроса: " . $error->getMessage() . PHP_EOL;
            }
    );
}

task3();
require 'parallel.php';