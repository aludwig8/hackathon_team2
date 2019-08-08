<?php

use Slim\App;

return function (App $app) {


    $app->get('/','Src\Controller\HomeController:index')->setName('home');
    $app->get('/about','Src\Controller\HomeController:about')->setName('about');
    $app->get('/products','Src\Controller\HomeController:products')->setName('products');
    $app->get('/login','Src\Controller\HomeController:login')->setName('login');
    $app->get('/register','Src\Controller\HomeController:register')->setName('register');


};