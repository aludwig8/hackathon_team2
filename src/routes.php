<?php

use Slim\App;

return function (App $app) {

    $app->get('/','Src\Controller\HomeController:home')->setName('home');
    $app->get('/about','Src\Controller\HomeController:about')->setName('about');
    $app->get('/products','Src\Controller\ProductController:index')->setName('products');
    $app->get('/products/filter','Src\Controller\ProductController:getByCategory')->setName('product.categories');
    $app->get('/login','Src\Controller\Auth\LoginController:create')->setName('login');
    $app->post('/login','Src\Controller\Auth\LoginController:login')->setName('login.submit');
    $app->get('/logout','Src\Controller\Auth\LoginController:logout')->setName('login.logout');
    $app->get('/register','Src\Controller\Auth\RegisterController:create')->setName('register');
    $app->post('/register','Src\Controller\Auth\RegisterController:store')->setName('register.store');

};