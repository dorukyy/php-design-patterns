<?php

namespace App;

// This class is a concrete implementation of the Logger interface and is responsible for logging data to the database.
class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to the database');
    }
}