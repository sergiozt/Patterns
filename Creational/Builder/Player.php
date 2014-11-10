<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 17:31
 */
class Player
{
    protected $_videoCodec;

    protected $_audioCodec;

    protected $_volume;

    /**
     * Set video codec.
     * @param string $videoCodec .
     */
    public function setVideoCodec($videoCodec)
    {
        $this->_videoCodec = $videoCodec;
    }

    /**
     * Set audio codec.
     * @param string $audioCodec .
     */
    public function setAudioCodec($audioCodec)
    {
        $this->_audioCodec = $audioCodec;
    }

    /**
     * Set volume.
     * @param Builder $volume .
     */
    public function setVolume($volume)
    {
        $this->_volume = $volume;
    }

    /**
     * Play record.
     * @param string $recordName
     *
     * @return string
     */
    public function play($recordName)
    {
        return 'playing ' . $recordName;
    }
}