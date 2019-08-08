<?php

require __DIR__ . '/../../src/config/app.php';

//register routes
$routes = require __DIR__.'/../routes.php';
$routes($app);

$app->run();

