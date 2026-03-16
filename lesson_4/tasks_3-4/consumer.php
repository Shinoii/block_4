<?php

require_once 'vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('log_queue', false, false, false, false);

$callback = function ($msg) {
    $logFile = __DIR__ . '/log.txt';

    $logMessage = "[" . date('Y-m-d H:i:s') . "] " . $msg->body . PHP_EOL;

    file_put_contents($logFile, $logMessage, FILE_APPEND);

    echo "Logged: " . $msg->body . "\n";
};

$channel->basic_consume('log_queue', '', false, true, false, false, $callback);

while ($channel->is_consuming()) {
    $channel->wait();
}
