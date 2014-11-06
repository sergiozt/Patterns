<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 18:38
 */

function __autoload($className)
{
    require_once $className . '.php';
}

$zerg = new Zerg();
$org = new Org();
$army = new Army();
$army->addUnit($zerg);
$army->addUnit($org);

echo $zerg->getStrength() . PHP_EOL;;
echo $army->getStrength() . PHP_EOL;;
var_export(get_defined_constants(true));