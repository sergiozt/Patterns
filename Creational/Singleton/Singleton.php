<?php

/**
 * Singleton Pattern.
 *
 * Author: s.zheleznytskyi
 * Date: 10/21/14
 * Time: 4:36 PM
 */
class Singleton
{
    /**
     * @var object|null Reference to singleton instance.
     */
    private static $_instance;

    /**
     * Prevent to create object from outside.
     */
    private function __construct()
    {

    }

    /**
     * Create object on first usage.
     *
     * @return object
     */
    static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new static;
        }
        return self::$_instance;
    }

    /**
     * Prevent to clone the instance.
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * Prevent to serialize the instance.
     *
     * @return void
     */
    private function __sleep()
    {

    }
}