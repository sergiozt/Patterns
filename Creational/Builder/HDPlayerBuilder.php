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
     * Set video codec.
     */
    public function setVideoCodec()
    {
        $this->_player->setVideoCodec('HD video codec');
    }

    /**
     * Set audio codec.
     */
    public function setAudioCodec()
    {
        $this->_player->setAudioCodec('HD audio codec');
    }

    /**
     * Set volume.
     */
    public function setVolume()
    {
        $this->_player->setVolume('HD volume');
    }
}