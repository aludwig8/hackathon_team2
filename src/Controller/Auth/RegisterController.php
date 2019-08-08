<?php


namespace Src\Controller\Auth;


use Src\Controller\BaseController;
use Respect\Validation\Validator as v;
use Src\Model\User;


class RegisterController extends BaseController
{
    public function create($request, $response)
    {
        return $this->container->view->render($response, 'register.twig');
    }

    public function store($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'email' => v::noWhitespace()->notEmpty()->email()->length(2, 50)->uniqueEmail(),
            'full_name' => v::noWhitespace()->notEmpty()->length(2, 50)->alpha(),
            'password' => v::noWhitespace()->notEmpty()->length(5, 20),
        ]);

        if ($validation->failed()) {
            return 'Validation Error';
            return $response->withRedirect($this->router->pathFor('register'));
        }

        $user = User::create([
            'email' => $request->getParam('email'),
            'full_name' => $request->getParam('full_name'),
            'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
        ]);

        //set by default simple role
        $user->role_id = 1;

        $user->save();

        $this->flash->addMessage('message', 'You have been signed up');
        return $response->withRedirect($this->router->pathFor('login'));

    }
}