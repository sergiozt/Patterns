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
     * Set video codec.
     */
    public function setVideoCodec()
    {
        $this->_player->setVideoCodec('simple video codec');
    }

    /**
     * Set audio codec.
     */
    public function setAudioCodec()
    {
        $this->_player->setAudioCodec('simple audio codec');
    }

    /**
     * Set volume.
     */
    public function setVolume()
    {
        $this->_player->setVolume('simple volume');
    }
}

