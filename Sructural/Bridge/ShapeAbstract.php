<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 17:09
 */
abstract class ShapeAbstract
{
    /**
     * @var DrawerInterface
     */
    protected $_drawer;

    /**
     * @param DrawerInterface $drawer
     */
    protected function __construct(DrawerInterface $drawer)
    {
        $this->_drawer = $drawer;
    }

    /**
     * @return mixed
     */
    abstract public function draw();

    /**
     * @param $multiplier
     * @return mixed
     */
    abstract public function enlargeRadius($multiplier);
}