<?php

require __DIR__ . '/../../src/config/app.php';

$app->get('/home', function ($request, $response) {
    return $this->view->render($response, 'home.twig');
});

$app->run();

