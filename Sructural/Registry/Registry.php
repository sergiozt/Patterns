<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 16:16
 */
abstract class Registry
{
    /**
     * @var array
     */
    protected static $_storedValues = array();

    /**
     * Gets a value from the registry.
     *
     * @param string $key
     *
     * @static
     * @return mixed
     */
    public static function get($key)
    {
        return isset(self::$_storedValues[$key]) ? self::$_storedValues[$key] : null;
    }

    /**
     * Sets a value.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @static
     * @return void
     */
    public static function set($key, $value)
    {
        self::$_storedValues[$key] = $value;
    }

    /**
     * Unset a value from the registry.
     *
     * @param string $key
     *
     * @static
     */
    public static function uns($key)
    {
        if (isset(self::$_storedValues[$key])) {
            unset(self::$_storedValues[$key]);
        }
    }
}

$data = array(
    'key1' => 'value',
    'key2' => 'value2',
);

Registry::set('some_data', $data);
$testClass = new stdClass();
Registry::set('testClass', $testClass);

var_export(Registry::get('some_data'));
var_export(Registry::get('testClass'));