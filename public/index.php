<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Router.php';

use App\Router;

Router::init(__DIR__ . '/../views', __DIR__ . '/../cache');

// Include the web routes
require __DIR__ . '/../routes/web.php';


Router::run();
