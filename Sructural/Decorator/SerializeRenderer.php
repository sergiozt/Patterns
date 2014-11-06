<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 16:08
 */
class SerializeRenderer extends Decorator
{
    /**
     * Decorate Webservice.
     *
     * @return string.
     */
    public function render()
    {
        $output = $this->wrapped->render();

        return serialize($output);
    }
}