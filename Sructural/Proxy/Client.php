<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 11:17
 */

/**
 * Client Class that does not use the data dump of the image.
 * Passing blindly a Proxy to this class and to other Clients makes sense
 * as the data would be loaded anyway when Image::dump() is called.
 */
class Client
{
    /**
     * Get image tag with properties.
     * @param ImageInterface $image .
     *
     * @return string. Image tag with properties.
     */
    public function tag(ImageInterface $image)
    {
        return '<img src="' . $image->getPath() . '"
                 width="' . $image->getWidth() . '"
                 height="' . $image->getHeight() . '" />';
    }
}