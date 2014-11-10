
<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 06.11.14
 * Time: 18:28
 */
class Client implements OperationInterface
{
    /**
     * Open client transaction.
     *
     * @return string
     */
    function openTransaction()
    {
        return 'open client transaction';
    }

    /**
     * Close client transaction.
     *
     * @return string
     */
    function closeTransaction()
    {
       return 'close client transaction';
    }

    /**
     * Transfer client money.
     *
     * @param mixed $amount. Amount to transfer.
     *
     * @return string
     */
    function transferMoney($amount)
    {
        return 'transfer client money';
    }
}