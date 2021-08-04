<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/connection.php';

use PhpAmqpLib\Message\AMQPMessage;

$data = implode(' ', array_slice($argv, 1));

if (empty($data)) {
    $data = "Hello World!";
}

$msg = new AMQPMessage($data,
	array('delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT));

$channel = $connection->channel();

$channel->basic_publish($msg, '', 'high');

printf(" [%s] Sent %s\n", md5($data), $data);

$channel->close();
$connection->close();

?>
