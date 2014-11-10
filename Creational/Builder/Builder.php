<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 18:34
 */

/**
 * Builder Class. Create Player object. Has abstract methods.
 *
 */
abstract class Builder
{
    protected $_player;

    /**
     * Create Player object.
     *
     */
    public function initPlayer()
    {
        $this->_player = new Player();
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->_player;
    }


    /**
     * @return mixed
     */
    public abstract function setVideoCodec();

    /**
     * @return mixed
     */
    public abstract function setAudioCodec();

    /**
     * @return mixed
     */
    public abstract function setVolume();
}