<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 11:52
 */

/**
 * Subject interface.
 * Client depends only on this abstraction.
 */
interface ImageInterface
{
    /**
     * Get image width.
     *
     * @return string.
     */
    public function getWidth();

    /**
     * Get image height.
     *
     * @return string.
     */
    public function getHeight();

    /**
     * Get Image Path.
     *
     * @return string.
     */
    public function getPath();

    /**
     * Get Image BLOB.
     *
     * @return string.
     */
    public function dump();
}