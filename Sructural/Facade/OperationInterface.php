<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 18:27
 */
interface OperationInterface
{
    /**
     * Open Transaction.
     *
     * @return string
     */
    function openTransaction();

    /**
     * Close Transaction.
     *
     * @return string
     */
    function closeTransaction();


    /**
     * Transfer Money.
     *
     * @param mixed $amount To Transfer.
     *
     * @return string
     */
    function transferMoney($amount);
}