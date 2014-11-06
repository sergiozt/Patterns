<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 14:16
 */
class Army extends CompositeUnit
{
    /**
     * Get All Army Strength.
     *
     * @return int
     */
    public function getStrength()
    {
        $units = $this->_units();
        $strength = 0;
        foreach ($units as $unit) {
            $strength += $unit->getStrength();
        }

        return 'Army strength is: ' . $strength;
    }
}