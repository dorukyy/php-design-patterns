<?php

use App\Login;
use App\LogHandler;
use App\EmailNotifier;
use App\LoginReporter;

require 'vendor/autoload.php';


$logins = new Login;
$logins->attach([
    new LogHandler,
    new EmailNotifier,
    new LoginReporter
]);