<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 12.11.14
 * Time: 19:06
 */


class UserObserver implements SplObserver
{
    /**
     * Receive update from subject
     * @param SplSubject $subject
     * The SplSubject notifying the observer of an update.
     *
     * @return void
     */
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . ' has been updated';
    }
}