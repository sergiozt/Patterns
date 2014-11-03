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
     * @var object|null Reference To Singleton Instance.
     */
    private static $_instances = array();

    /**
     * Prevent To Create Object From Outside.
     */
    private function __construct()
    {

    }

    /**
     * Gets The Instance With The given Name.
     * Uses Lazy Initialization.
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
     * Prevent To Clone The Instance.
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * Prevent To Serialize The Instance.
     *
     * @return void
     */
    private function __sleep()
    {

    }
}