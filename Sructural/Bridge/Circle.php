<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 17:10
 */

class Circle extends ShapeAbstract
{
    /**
     * @var int
     */
    private $_x;
    /**
     * @var int
     */
    private $_y;
    /**
     * @var int
     */
    private $_radius;

    /**
     * @param int $x. Circle position.
     * @param int $y. Circle position.
     * @param int $radius. Circle radius.
     * @param DrawerInterface $drawer
     */
    public function __construct($x, $y, $radius, DrawerInterface $drawer)
    {
        parent::__construct($drawer);
        $this->_x = $x;
        $this->_y = $y;
        $this->_radius = $radius;
    }

    /**
     * Draw Circle.
     */
    public function draw()
    {
        $this->_drawer->drawCircle($this->_x, $this->_y, $this->_radius);
    }

    /**
     * @param $multiplier
     */
    public function enlargeRadius($multiplier)
    {
        $this->_radius *= $multiplier;
    }
}