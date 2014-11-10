<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 12:00
 */

/**
 * The RealSubject. Always Loads The Image.
 * Even If No Dump Of The Data Is rRequired.
 */
class RawImage extends AbstractImage
{
    /**
     * Get image properties.
     *
     * @param string $path. Path To Image.
     */
    public function __construct($path)
    {
        $this->_path = $path;
        list($this->_width, $this->_height) = getimagesize($path);
        $this->_data = file_get_contents($path);
    }

    /**
     * @return string. Image BLOB.
     */
    public function dump()
    {
        return $this->_data;
    }
}