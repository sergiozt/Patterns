<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 07.11.14
 * Time: 17:47
 */
class Connection
{
    /**
     * @var Parameters.
     */
    protected $_configuration;
    /**
     * @var Parameters. Connected Host.
     */
    protected $_host;

    /**
     * @param Parameters $configuration .
     */
    public function __construct(Parameters $configuration)
    {
        $this->_configuration = $configuration;
    }

    /**
     * Connection Using The Injection Config.
     */
    public function connect()
    {
        $host = $this->_configuration->get('host');
        //do some stuff
        $this->_host = $host;
    }

    /*
     * Get currently connected host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->_host;
    }
}