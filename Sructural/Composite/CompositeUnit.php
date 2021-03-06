<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 12:48
 */
abstract class CompositeUnit extends Unit
{

    /**
     * Units.
     */
    private $_units = array();

    /**
     * Check if class is Composite.
     *
     * @return int
     */
    public function isComposite()
    {
        return true;
    }

    /**
     * Remove unit.
     */
    public function removeUnit(Unit $unit)
    {
        $this->_units = array_udiff(
            $this->_units,
            array($unit),
            function ($a, $b) {
                return ($a === $b) ? 0 : 1;
            }
        );
    }

    /**
     * Add unit.
     */
    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->_units, true)) {
            return;
        }

        $this->_units[] = $unit;
    }

    /**
     * Get aal units.
     */
    protected function _units()
    {
        return $this->_units;
    }
}