<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 11.11.14
 * Time: 12:17
 */

/**
 * Interface SocialAdapterInterface
 */
interface SocialAdapterInterface
{
    /**
     * @param string $message
     * @return mixed
     */
    public function post($message);
}