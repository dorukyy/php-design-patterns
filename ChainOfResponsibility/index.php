<?php


require 'vendor/autoload.php';

use App\Alarm;
use App\HomeStatus;
use App\Lights;
use App\Locks;

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->setSuccessor($lights);
$lights->setSuccessor($alarm);



$locks->check(new HomeStatus);


