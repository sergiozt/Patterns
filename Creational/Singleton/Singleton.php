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
     * @var object|null Reference To Singleton Instance.
     */
    private static $_instance;

    /**
     * Prevent To Create Object From Outside.
     */
    private function __construct()
    {

    }

    /**
     * Create Object On First Usage.
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