<?php


namespace Src\Controller\Auth;


use Src\Controller\BaseController;
use Respect\Validation\Validator as v;


class LoginController extends BaseController
{
    public function create($request, $response)
    {
        return $this->container->view->render($response, 'login.twig');
    }

    public function login($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'email' => v::noWhitespace()->notEmpty()->email(),
            'password' => v::notEmpty()
        ]);

        if ($validation->failed()) {
            return 'Validation Error';
            return $response->withRedirect($this->router->pathFor('login'));
        }

        $auth = $this->auth->attempt(
            $request->getParam('email'),
            $request->getParam('password')
        );

        if (!$auth) {
            $this->flash->addMessage('error', 'Wrong email or password');
            return $response->withRedirect($this->router->pathFor('login'));
        }

        return $response->withRedirect($this->router->pathFor('products'));
    }

    public function logout($request, $response)
    {
        $this->auth->logout();
        return $response->withRedirect($this->router->pathFor('home'));
    }
}