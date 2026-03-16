<?php

require 'vendor/autoload.php';

$redis = new Predis\Client();

$logFile = __DIR__ . '/log.txt';

while (true) {
    $task = $redis->blpop('log_queue', 0);

    if($task) {
        $data = json_decode($task[1], true);

        $logMessage = "[" . date('Y-m-d H:i:s') . "] " . $data['message'] . PHP_EOL;

        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
}