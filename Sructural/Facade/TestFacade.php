<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 06.11.14
 * Time: 18:38
 */
function __autoload($className)
{
    require_once $className . '.php';
}

$transfer = new Facade(new Bank(), new Client(), new Log());
$transfer->transfer(200);