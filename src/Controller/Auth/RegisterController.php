<?php


namespace Src\Controller\Auth;


use Src\Controller\BaseController;
use Respect\Validation\Validator as v;


class RegisterController extends BaseController
{
    public function create($request, $response)
    {
        return $this->container->view->render($response, 'register.twig');
    }

    public function store($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'email' => v::noWhitespace()->notEmpty()->email(),
            'full_name' => v::noWhitespace()->notEmpty()->alpha(),
            'password' => v::noWhitespace()->notEmpty(),
        ]);

        if ($validation->failed()) {
            $this->flash->addMessage('error', 'Could not sign up you in with those details');
            return $response->withRedirect($request->getUri()->getPath());
        }
    }
}