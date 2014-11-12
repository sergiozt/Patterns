<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 17:06
 */

class LargeCircleDrawer implements DrawerInterface
{

    /**
     * Radius Multiplier.
     */
    const RADIUS_MULTIPLIER = 0.25;

    /**
     * @param int $x.
     * @param int $y.
     * @param int $radius.
     */
    public function drawCircle($x, $y, $radius)
    {
        echo 'Large circle center = ( '.$x.', '.$y.' ) radius = '.($radius * self::RADIUS_MULTIPLIER).'<br>';
    }
}