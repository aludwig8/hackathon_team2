<?php

use Respect\Validation\Validator as v;

session_start();
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../src/config/database.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

/*model prefixing
Model::$short_table_names = true;*/

$container = $app->getContainer();

$container['validator'] = function ($container) {
    return new \Src\Validation\Validator();
};

$container['flash'] = function ($container) {
    return new \Slim\Flash\Messages;
};

$container['auth'] = function ($container) {
    return new \Src\Controller\Auth\Auth();
};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false,
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    $view->addExtension(new Knlv\Slim\Views\TwigMessages(
        new Slim\Flash\Messages()
    ));

    // dd('test');


    return $view;
};

$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['errorHandler'] = function ($container) {
    return function ($request, $response, $exception) use ($container) {
        //Format of exception to return
        $data = [
            'message' => $exception->getMessage()
        ];

       $error = $exception->getMessage();

        return $container['view']->render($response,'error.twig', compact('error'));
    };
};

v::with('Src\\Validation\\Rules');

