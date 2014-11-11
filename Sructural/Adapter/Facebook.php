<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 11.11.14
 * Time: 12:14
 */

/**
 * Class Facebook. Post User Massage.
 */
class Facebook
{
    /**
     * If method is modified, need to update Facebook Adapter.
     *
     * @param string $message . User message.
     */
    public function postOnWall($message)
    {
        echo 'Posting message ' . $message;
    }
}