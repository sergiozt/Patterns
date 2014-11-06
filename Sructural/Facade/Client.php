
<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 18:28
 */
class Client implements OperationInterface
{
    /**
     * Open Client Transaction.
     *
     * @return string
     */
    function openTransaction()
    {
        return 'open client transaction';
    }

    /**
     * Close Client Transaction.
     *
     * @return string
     */
    function closeTransaction()
    {
       return 'close client transaction';
    }

    /**
     * Transfer Client Money.
     *
     * @param mixed $amount To Transfer.
     *
     * @return string
     */
    function transferMoney($amount)
    {
        return 'transfer client money';
    }
}