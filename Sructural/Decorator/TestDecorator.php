<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 15:52
 */

function __autoload($className)
{
    require_once $className . '.php';
}

$service = new WebService('some data');

$jsonService = new JsonRenderer($service);
echo $jsonService->render();

$serializeService = new SerializeRenderer($service);
echo $serializeService->render();