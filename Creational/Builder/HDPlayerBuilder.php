<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 18:37
 */
class HDPlayerBuilder extends Builder
{
    /**
     * @var Player
     */
    protected $_player;

    /**
     * Set Video Codec.
     */
    public function setVideoCodec()
    {
        $this->_player->setVideoCodec('HD video codec');
    }

    /**
     * Set Audio Codec.
     */
    public function setAudioCodec()
    {
        $this->_player->setAudioCodec('HD audio codec');
    }

    /**
     * Set Volume.
     */
    public function setVolume()
    {
        $this->_player->setVolume('HD volume');
    }
}