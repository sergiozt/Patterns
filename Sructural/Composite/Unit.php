<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 12:48
 */
abstract class Unit
{
    /**
     * Check if class is Composite.
     *
     * @return int
     */
    public function isComposite()
    {
        return false;
    }

    /**
     * Get strength.
     *
     * @return mixed
     */
    abstract public function getStrength();
}