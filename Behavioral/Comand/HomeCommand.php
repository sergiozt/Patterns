<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 14.11.14
 * Time: 11:52
 */
class HomeCommand implements CommandInterface
{
    /**
     * @var Receiver.
     */
    protected $_output;

    /**
     * Set Receiver.
     *
     * @param Receiver $console .
     */
    public function __construct(Receiver $console)
    {
        $this->_output = $console;
    }

    /**
     * Execute teh receiver method.
     *
     * @return mixed|void.
     */
    public function execute()
    {
        $this->_output->write('Welcome Home');
    }
}
Symfony\DependencyInjection,Zend\Di,PHP-DI and so on

PHP-DI, a popular DI Container
Symfony\DependencyInjection, the the Dependency Injection Container provided by the Symfony framework
Zend\Di the Dependency Injection Container provided by Zend Framework
Orno\Di, a lesser known container with limited features but developed with performance in mind
Dice, another lesser known container with a focus on being lightweight. Full disclosure, I’m the author of this container, but I’ll be nothing short of entirely objective in this analysis.
Aura.Di, a f