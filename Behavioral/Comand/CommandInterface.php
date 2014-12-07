<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 14.11.14
 * Time: 11:49
 */
interface CommandInterface
{
    /**
     * Execute Receiver method.
     *
     * @return mixed
     */
    public function execute();
}