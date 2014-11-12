<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 12.11.14
 * Time: 19:06
 */

class User implements SplSubject
{
    protected $_observers = array();
    protected $_data = array();

    /**
     * Attach an SplObserver
     * @param SplObserver $observer. The SplObserver to attach.
     *
     * @return void
     */
    public function attach (SplObserver $observer)
    {
        $this->_observers[] = $observer;
    }

    /**
     * Detach an observer
     * @param SplObserver $observer. The SplObserver to detach.
     *
     * @return void
     */
    public function detach (SplObserver $observer)
    {
        $index = array_search($observer, $this->_observers);

        if (false !== $index) {
            unset($this->_observers[$index]);
        }
    }

    /**
     * Notify an observer
     *
     * @return void
     */
    public function notify ()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Create user. Notify observers.
     *
     * @param mixed $data
     */
    public function create($data)
    {
        $this->_data = $data;
        //do some stuff
        $this->notify();
    }
}