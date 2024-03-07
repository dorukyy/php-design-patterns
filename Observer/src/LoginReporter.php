<?php

namespace App;

class LoginReporter implements Observer
{
    public function handle()
    {
        var_dump('login report');
    }
}