<?php

namespace App;

// This class is a concrete implementation of the Logger interface and is responsible for logging data to a file.
class LogToFile implements Logger{
    public function log($data){
        var_dump('Log the data to a file');
    }
}