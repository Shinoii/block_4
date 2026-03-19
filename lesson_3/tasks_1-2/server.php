<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server("127.0.0.1", 9501);

$server->on("request", function (Request $request, Response $response) {
    timer();
    $response->header("Content-Type", "text/plain; charset=utf-8");
    $response->end("Сообщение, которое выводится моментально!");
});

function timer(){
    Swoole\Timer::after(5000, function () {
        echo "Каждые 5 секунд выводится сообщение в консоль\n";
    });
}

$server->start();