<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 08.11.14
 * Time: 20:49
 */
/**
 * @param $className
 */
function __autoload($className)
{
    require_once $className . '.php';
}

$source = array(
    'host' => 'github.com',
);

$config = new ArrayConfig($source);
$connection = new Connection($config);

$connection->connect();

