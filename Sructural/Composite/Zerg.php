<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 12:48
 */
class Zerg extends Unit
{
    /**
     * Serg Strength.
     */
    CONST STRENGTH = 5;

    /**
     * Get Serg Strength.
     *
     * @return int
     */
    public function getStrength()
    {
        return self::STRENGTH;
    }
}