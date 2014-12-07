<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 12.11.14
 * Time: 19:21
 */
function __autoload($className)
{
    require_once $className . '.php';
}

$receiver = new Receiver();
$invoker = new Invoker();
$invoker->setCommand((new HomeCommand($receiver)));
$invoker->run();

