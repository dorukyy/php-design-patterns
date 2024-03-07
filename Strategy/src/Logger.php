<?php

namespace App;


// This is the Logger interface. It defines the contract that all concrete implementations must follow.
interface Logger{
    public function log($data);
}