<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 12:20
 */
class SimplePlayerBuilder extends Builder
{
    protected $_player;

    /**
     * Set Video Codec.
     */
    public function setVideoCodec()
    {
        $this->_player->setVideoCodec('simple video codec');
    }

    /**
     * Set Audio Codec.
     */
    public function setAudioCodec()
    {
        $this->_player->setAudioCodec('simple audio codec');
    }

    /**
     * Set Volume.
     */
    public function setVolume()
    {
        $this->_player->setVolume('simple volume');
    }
}

