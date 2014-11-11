<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 11.11.14
 * Time: 12:18
 */

/**
 * Class FacebookAdapter.
 */
class FacebookAdapter implements SocialAdapterInterface
{
    /**
     * @var Facebook.
     */
    protected $_facebook;

    /**
     * @param Facebook $facebook.
     */
    public function __construct(Facebook $facebook)
    {
        $this->_facebook = $facebook;
    }

    /**
     * Post massage.
     *
     * @param string $message.
     *
     * @return string.
     */
    public function post($message)
    {
        $this->_facebook->postOnWall($message);
    }
}