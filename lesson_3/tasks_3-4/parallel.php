<?php
use React\Http\Browser;

function task4(){
    $browser = new Browser();

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

task4();