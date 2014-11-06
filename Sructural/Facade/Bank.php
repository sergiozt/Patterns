<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 18:28
 */
class Bank implements OperationInterface
{
  /**
   * Open Bank Transaction.
   *
   * @return string
   */
    function openTransaction()
    {
        return 'open bank transaction';
    }

    /**
     * Close Bank Transaction.
     *
     * @return string
     */
    function closeTransaction()
    {
        return 'close bank transaction';
    }

    /**
     * Transfer Bank Money.
     *
     * @param mixed $amount To Transfer.
     *
     * @return string
     */
    function transferMoney($amount)
    {
        return 'transfer bank money';
    }
}