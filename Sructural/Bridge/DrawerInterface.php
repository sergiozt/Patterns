<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 17:04
 */

interface DrawerInterface
{
    /**
     * @param $x
     * @param $y
     * @param $radius
     *
     * @return mixed
     */
    public function drawCircle($x, $y, $radius);
}