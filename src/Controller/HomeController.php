<?php


namespace Src\Controller;


class HomeController extends BaseController
{
    public function index($request, $response)
    {
        return $this->container->view->render($response, 'index.twig');
    }
    public function about($request, $response)
    {
        return $this->container->view->render($response, 'about.twig');
    }

    public function products($request, $response)
    {
        return $this->container->view->render($response, 'products.twig');
    }

    public function login($request, $response)
    {
        return $this->container->view->render($response, 'login.twig');
    }

    public function register($request, $response)
    {
        return $this->container->view->render($response, 'register.twig');
    }



}