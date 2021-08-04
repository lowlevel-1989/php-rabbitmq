<?php
    require_once __DIR__ . '/config.php';

    use PhpAmqpLib\Connection\AMQPStreamConnection;

    $connection = new AMQPStreamConnection(HOST, PORT, USER, PASS);
?>
