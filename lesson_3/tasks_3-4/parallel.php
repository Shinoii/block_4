<?php
require 'vendor/autoload.php';

use React\Http\Browser;
use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;
use React\EventLoop\Factory as LoopFactory;

$loop = LoopFactory::create();

$server = new HttpServer(function (ServerRequestInterface $request) {});

$socket = new SocketServer('127.0.0.1:8080');
$server->listen($socket);

function task4($loop){
    $browser = new Browser($loop);

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

    $browser->get('https://jsonplaceholder.typicode.com/users/1')
        ->then(
            function ($response) {
                echo "Паралелльная задача, пользователь:\n";
                echo $response->getBody()->getContents() . PHP_EOL;
            },
            function ($error) {
                echo "Ошибка запроса: " . $error->getMessage() . PHP_EOL;
            }
        );
}

task4($loop);

$loop->run();