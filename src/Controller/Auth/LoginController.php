<?php


namespace Src\Controller\Auth;


use Src\Controller\BaseController;
use Respect\Validation\Validator as v;


class LoginController extends BaseController
{
    public function create($request, $response)
    {
        return $this->view->render($response, 'login.twig');
    }

    public function login($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'email' => v::noWhitespace()->notEmpty()->email(),
            'password' => v::notEmpty()
        ]);


        if ($validation->failed()) {
            $errors = $_SESSION['errors'];
            return $this->view->render($response, 'login.twig', compact('errors'));
        }

        $auth = $this->auth->attempt(
            $request->getParam('email'),
            $request->getParam('password')
        );

        if (!$auth) {
            $errors = [
                "wrong_username_or_password" => 'Wrong email or password'
            ];
            return $this->view->render($response, 'login.twig', compact('errors'));
        }

        return $response->withRedirect($this->router->pathFor('products'));
    }

    public function logout($request, $response)
    {
        $this->auth->logout();
        return $response->withRedirect($this->router->pathFor('home'));
    }
}