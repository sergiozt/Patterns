<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 18:27
 */
interface OperationInterface
{
    /**
     * Open transaction.
     *
     * @return string
     */
    function openTransaction();

    /**
     * Close transaction.
     *
     * @return string
     */
    function closeTransaction();


    /**
     * Transfer Money.
     *
     * @param mixed $amount. Amount to transfer.
     *
     * @return string
     */
    function transferMoney($amount);
}