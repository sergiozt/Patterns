<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 17:14
 */

function __autoload($className)
{
    require_once $className . '.php';
}

$circle = new Circle(5, 10, 10, new LargeCircleDrawer());
$circle->draw();

$circle = new Circle(20, 30, 100, new SmallCircleDrawer());
$circle->draw();