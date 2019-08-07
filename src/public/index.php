<?php

require __DIR__ . '/../../src/config/app.php';

$app->get('/login', function ($request, $response) {
    return $this->view->render($response, 'login.twig');
})->setName('login');

$app->get('/register', function ($request, $response) {
    return $this->view->render($response, 'register.twig');
})->setName('register');


$app->run();

