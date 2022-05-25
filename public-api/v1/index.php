<?php
ini_set('date.timezone', 'Asia/Jakarta');
set_time_limit(120); // 2 minutes

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Composer autoload
require __DIR__ . '/../vendor/autoload.php';
// App functions
require __DIR__ . '/app/functions.php';
// Request Log
require __DIR__ . '/app/request-log.php';

$app_settings = require __DIR__ . '/app/settings.php';

$app = new \Slim\App($app_settings);

// Set up dependencies
require __DIR__ . '/app/dependencies.php';

// Register middleware
require __DIR__ . '/app/middleware.php';

// Register controller
require __DIR__ . '/app/controller/AppController.php';

// Register routes
foreach (glob('app/routes/*.php') as $routefile) {
    include __DIR__ . '/' . $routefile;
}

$app->run();
