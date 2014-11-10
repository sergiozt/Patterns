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
     * Set data to variable.
     *
     */
    public function __construct($data)
    {
        $this->_data = $data;
    }

    /**
     * Render data.
     *
     * @return mixed.
     */
    public function render()
    {
        return $this->_data;
    }
}