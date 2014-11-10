<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 18:28
 */
class Bank implements OperationInterface
{
  /**
   * Open bank transaction.
   *
   * @return string
   */
    function openTransaction()
    {
        return 'open bank transaction';
    }

    /**
     * Close bank transaction.
     *
     * @return string
     */
    function closeTransaction()
    {
        return 'close bank transaction';
    }

    /**
     * Transfer bank money.
     *
     * @param mixed $amount. Amount to transfer.
     *
     * @return string
     */
    function transferMoney($amount)
    {
        return 'transfer bank money';
    }
}