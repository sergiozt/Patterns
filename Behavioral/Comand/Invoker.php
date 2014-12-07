<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 14.11.14
 * Time: 11:46
 */

/**
 * Class Invoker. Using the command given to it.
 */
class Invoker
{
    /**
     * @var CommandInterface.
     */
    protected $_command;

    /**
     * @param CommandInterface $command .
     */
    public function setCommand(CommandInterface $command)
    {
        $this->_command = $command;
    }

    /**
     * Execute the command.
     */
    public function run()
    {
        $this->_command->execute();
    }
}