<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 12:48
 */
abstract class Unit
{
    /**
     * Check If Class Is Composite.
     *
     * @return int
     */
    public function isComposite()
    {
        return false;
    }

    /**
     * Get Serg Strength.
     *
     * @return mixed
     */
    abstract public function getStrength();
}