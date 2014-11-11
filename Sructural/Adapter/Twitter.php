<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 11.11.14
 * Time: 12:14
 */


/**
 * Class Twitter. Post User Massage.
 */
class Twitter
{
    /**
     * If method is modified, need to update Twitter Adapter.
     *
     * @param string $message . User message.
     */
    public function postMessage($message)
    {
        echo 'Posting message ' . $message;
    }
}