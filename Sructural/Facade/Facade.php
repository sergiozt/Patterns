<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 06.11.14
 * Time: 18:25
 */

class Facade
{
    protected $_bank;
    protected $_client;
    protected $_log;
    protected $_amount;

    /**
     * Set The Instance Of The Class To Properties.
     *
     * @param OperationInterface $bank.
     * @param OperationInterface $client.
     * @param Log $log.
     *
     */
    public function __construct(OperationInterface $bank, OperationInterface $client, Log $log)
    {
        $this->_bank = $bank;
        $this->_client = $client;
        $this->_log = $log;
    }

    /**
     * Transfer Money.
     */
    public function transfer($amount)
    {
        $this->_amount= $amount;
        $this->_openTransAction();
        $this->_transferMoney();
        $this->_closeTransAction();
    }

    /**
     * Open TransAction.
     */
    protected function _openTransAction()
    {
        $this->_bank->openTransaction();
        $this->_client->openTransaction();
        $this->_log->logTransaction('Transaction started.');
    }

    /**
     * Transfer Money.
     */
    protected function _transferMoney()
    {
        $this->_bank->transferMoney($this->_amount);
        $this->_client->transferMoney($this->_amount);
        $this->_log->logTransaction('Money Transfer.');
    }

    /**
     * Close TransAction.
     */
    protected function _closeTransAction()
    {
        $this->_bank->closeTransaction();
        $this->_client->closeTransaction();
        $this->_log->logTransaction('Close Transaction.');
    }
}