<?php

require 'vendor/autoload.php';

$redis = new Predis\Client();

$message = "Сообщение для логирования";

$redis->rpush('log_queue', json_encode([
    'message' => $message
]));