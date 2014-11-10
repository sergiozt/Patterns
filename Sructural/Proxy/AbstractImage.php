<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 11:53
 */

/**
 * Abstract class to avoid repetition of boilerplate code in the Proxy
 * and in the Subject. Only the methods which can be provided without
 * instancing the RealSubject are present here.
 */
abstract class AbstractImage implements ImageInterface
{
    /**
     * @var $_width . Image width.
     */
    protected $_width;
    /**
     * @var $_height . Image height.
     */
    protected $_height;
    /**
     * @var $_path . Image path.
     */
    protected $_path;
    /**
     * @var $_data . Image BLOB data.
     */
    protected $_data;


    /**
     * Get image width.
     *
     * @return string.
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * Get image height.
     *
     * @return string.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Get image path.
     *
     * @return string.
     */
    public function getPath()
    {
        return $this->_path;
    }
}