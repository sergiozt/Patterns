<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 12:48
 */
class Zerg extends Unit
{
    /**
     * Zerg strength.
     */
    CONST STRENGTH = 5;

    /**
     * Get Zerg strength.
     *
     * @return int
     */
    public function getStrength()
    {
        return self::STRENGTH;
    }
}