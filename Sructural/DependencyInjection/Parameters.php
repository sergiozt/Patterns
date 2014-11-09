<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 08.11.14
 * Time: 19:12
 */
interface Parameters
{

    /**
     * Set parameter
     *
     * @param string|int $key
     * @param mixed $value
     */
    function set($key, $value);

    /**
     * Get parameter
     *
     * @param string|int $key
     *
     * @return mixed
     */
    function get($key);
}