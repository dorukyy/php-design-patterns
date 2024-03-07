<?php

namespace App;

use App\HomeStatus;

// This is the abstract class that will be extended by the other classes in the chain of responsibility pattern.
abstract class HomeChecker
{
    protected $successor;

    public function setSuccessor(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }

    }

}