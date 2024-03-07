<?php

namespace App;


class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('log something important');
    }
}