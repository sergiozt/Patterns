<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 11.11.14
 * Time: 12:18
 */
class TwitterAdapter implements SocialAdapterInterface
{
    /**
     * @var Twitter
     */
    protected $_twitter;

    /**
     * @param Twitter $facebook .
     */
    public function __construct(Twitter $facebook)
    {
        $this->_twitter = $facebook;
    }

    /**
     * Post massage.
     *
     * @param string $message .
     *
     * @return string.
     */
    public function post($message)
    {
        $this->_twitter->postMessage($message);
    }
}