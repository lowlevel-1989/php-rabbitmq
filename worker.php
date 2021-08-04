<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/connection.php';

$callback = function ($msg) {
    printf("[%s] Received %s\n", md5($msg->body), $msg->body);
    sleep(substr_count($msg->body, '.'));
    printf("[%s] Done\n", md5($msg->body));
    $msg->ack();
};

$channel = $connection->channel();

$channel->basic_qos(null, 1, null);
$channel->basic_consume('high', '', false, false, false, false, $callback);

while ($channel->is_open()) {
    $channel->wait();
}

$channel->close();
$connection->close();

?>
