<?php

use App\App;
use App\LogToDatabase;
use App\LogToFile;
use App\LogToWebService;

require 'vendor/autoload.php';

// Create a new instance of the App class.
$app = new App;

// Call the log method on the App instance and pass in a new instance of the LogToDatabase class.
$app->log('Some information here.', new LogToWebService);

// Call the log method on the App instance and pass in a new instance of the LogToFile class.
$app->log('Some information here.', new LogToFile);

// Call the log method on the App instance and pass in a new instance of the LogToDatabase class.
$app->log('Some information here.', new LogToDatabase);