<?php

namespace App;

class EmailNotifier implements Observer
{
    public function handle()
    {
        var_dump('fire off an email');
    }
}