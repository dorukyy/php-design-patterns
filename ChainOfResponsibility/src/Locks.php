<?php

namespace App;

use Exception;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new Exception('The doors are not locked!');
        }

        $this->next($home);
    }
}

