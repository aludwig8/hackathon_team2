<?php


namespace Src\Controller;


class HomeController extends BaseController
{
    public function index($request, $response)
    {
        return $this->container->view->render($response, 'index.twig');
    }

}