<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 12:48
 */
class Org extends Unit
{
    /**
     * Org strength.
     */
    CONST STRENGTH = 4;

    /**
     * Get Org Strength.
     *
     * @return int
     */
    public function getStrength()
    {
        return self::STRENGTH;
    }
}