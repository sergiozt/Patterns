<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 18:36
 */
class Director
{
    /**
     * @var Builder
     */
    protected $_builder;

    /**
     * The Director doesn't know about concrete player type.
     *
     * @param Builder $builder
     *
     */
    public function __construct(Builder $builder)
    {
        $this->_builder = $builder;
        $this->_builder->initPlayer();
        $this->_builder->setVideoCodec();
        $this->_builder->setAudioCodec();
        $this->_builder->setVolume();
    }

    /**
     * Get built Player object.
     *
     * @return Builder
     */
    public function getPlayer()
    {
        return $this->_builder->getPlayer();
    }
}
