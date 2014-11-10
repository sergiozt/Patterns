<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 12:16
 */

/**
 * Proxy. Defers loading the image data until it becomes really mandatory.
 * This class does its best to postpone the very expensive operations
 * such as the actual loading of the BLOB.
 */
class ProxyImage extends AbstractImage
{

    /**
     * Get image properties.
     *
     * @param string $path. Path to image.
     */
    public function __construct($path)
    {
        $this->_path = $path;
        list($this->_width, $this->_height) = getimagesize($this->_path);
    }

    /**
     * Call lazy loading to create RawImage object.
     *
     * @return string. Image BLOB.
     */

    public function dump()
    {
        $this->_lazyLoad();

        return $this->_realImage->dump();
    }

    /**
     * Creates a RawImage and exploits its functionality.
     */
    protected function _lazyLoad()
    {
        if ($this->_realImage === null) {
            $this->realImage = new RawImage($this->_path);
        }
    }
}