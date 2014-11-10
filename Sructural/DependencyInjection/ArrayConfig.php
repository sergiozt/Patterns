<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 08.11.14
 * Time: 20:44
 */
class ArrayConfig extends AbstractConfig implements Parameters
{
    /**
     * Get parameter.
     *
     * @param string|int $key
     * @param null $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return isset($this->_storage[$key]) ? $this->_storage[$key] : $default;
    }

    /**
     * Set parameter.
     *
     * @param string|int $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->_storage[$key] = $value;
    }
}