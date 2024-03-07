<?php

namespace App;

use Exception;

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new Exception('The lights are on!');
        }

        $this->next($home);
    }

}