<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 08.11.14
 * Time: 20:42
 */
abstract class AbstractConfig
{
    /**
     * @var mixed $_storage Storage Data.
     */
    protected $_storage;

    public function __construct($storage)
    {
        $this->_storage = $storage;
    }
}