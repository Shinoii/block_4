<?php

require_once 'vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('log_queue', false, false, false, false);

$message = "Logged message";

$msg = new AMQPMessage(json_encode($message));

$channel->basic_publish($msg, '', 'log_queue');

echo "Задача добавлена в RabbitMQ.\n";

$channel->close();
$connection->close();
