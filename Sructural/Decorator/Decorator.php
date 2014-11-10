<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 15:59
 */
abstract class Decorator implements RendererInterface
{
    /**
     * RendererInterface object.
     */
    protected $_wrapped;

    /**
     * Set RendererInterface to variable.
     */
    public function __construct(RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}