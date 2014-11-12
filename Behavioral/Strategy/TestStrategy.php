<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 12.11.14
 * Time: 16:19
 */

function __autoload($className)
{
    require_once $className . '.php';
}

$data = array(4, 5, 1, 88, 43);
$obj = new ObjectCollection();
$obj->setSortAlgorithm(new QuickSort());

echo $obj->sort($data);