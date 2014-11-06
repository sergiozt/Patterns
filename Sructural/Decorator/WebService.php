<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 15:52
 */
class WebService implements RendererInterface
{
    protected $_data;

    /**
     * Set Data To Variable.
     *
     */
    public function __construct($data)
    {
        $this->_data = $data;
    }

    /**
     * Render Data.
     *
     * @return mixed.
     */
    public function render()
    {
        return $this->_data;
    }
}