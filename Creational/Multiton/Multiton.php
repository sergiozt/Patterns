<?php

/**
 * Multition Pattern.
 *
 * Author: s.zheleznytskyi
 * Date: 10/21/14
 * Time: 4:36 PM
 */
class Multiton
{
    /**
     * @var object|null reference to Singleton instance.
     */
    private static $_instances = array();

    /**
     * Prevent to create object from outside.
     */
    private function __construct()
    {

    }

    /**
     * Gets the instance with the given name.
     * Uses lazy initialization.
     * @param int|string $instanceName
     *
     * @return object
     */
    static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName, self::$_instances)) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
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