<?php

namespace App;

class Login implements Subject
{
    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;

    }

    public function detach($index)
    {
        unset($this->observers[$index]);

    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    /**
     * @param  array  $observable
     * @return void
     * @throws Exception
     */
    public function attachObservers(array $observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer) {
                throw new Exception;
            }
            $this->observers[] = $observer;
        }
    }

    public function fire()
    {
        // perform the login here
        $this->notify();
    }

}