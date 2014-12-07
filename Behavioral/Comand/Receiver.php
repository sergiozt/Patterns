<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 14.11.14
 * Time: 11:44
 */

/**
 * Class Receiver. Specific server with its own contract and can be only concrete.
 */
class Receiver
{
    /**
     * @param string $str .
     */
    public function write($str)
    {
        echo $str;
    }
}