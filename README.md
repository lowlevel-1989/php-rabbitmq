~~~txt
- REF: https://www.rabbitmq.com/tutorials/tutorial-one-php.html
- REF: https://www.rabbitmq.com/tutorials/tutorial-two-php.html
- REF: https://github.com/php-amqplib/php-amqplib


PHP 7.4.21 (cli) (built: Jun 29 2021 15:17:15) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.21, Copyright (c), by Zend Technologies
~~~

### 0.- PROTOCOLO AMQP
![](amqp-about.png)

### 1.- Instalar dependencias
~~~bash
$ curl -sS https://getcomposer.org/installer | php 
$ ./composer.phar require php-amqplib/php-amqplib
~~~

### 2.- DEMO (requiere RabbitMQ)
![](https://raw.githubusercontent.com/formatcom/php-rabbitmq/master/demo.png) 
