<?php

require __DIR__ . '/../../src/config/app.php';

$app->get('/login', function ($request, $response) {
    return $this->view->render($response, 'login.twig');
})->setName('login');

$app->get('/register', function ($request, $response) {
    return $this->view->render($response, 'register.twig');
})->setName('register');

$app->get('/index', function ($request, $response) {
    return $this->view->render($response, 'index.twig');
})->setName('home');

$app->get('/about', function ($request, $response) {
    return $this->view->render($response, 'about.twig');
})->setName('about');

$app->get('/products', function ($request, $response) {
    return $this->view->render($response, 'products.twig');
})->setName('products');


$app->run();

