<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 08.11.14
 * Time: 18:53
 */
class A
{
    public $b;

    public function __construct(B $b)
    {
        $this->b = $b;
    }
}

class B
{

}

require_once 'dice.php';
$dice = new \Dice\Dice;

$a = $dice->create('A');
var_dump($a->b); //B object