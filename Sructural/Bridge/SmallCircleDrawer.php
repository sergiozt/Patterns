<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 17:06
 */

class SmallCircleDrawer implements DrawerInterface
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
        echo 'Small circle center = ( '.$x.', '.$y.' ) radius = '.($radius * self::RADIUS_MULTIPLIER).'<br>';
    }
}