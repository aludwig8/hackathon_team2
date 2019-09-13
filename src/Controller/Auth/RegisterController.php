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
            'password_confirmation' => v::noWhitespace()->notEmpty()->length(5, 20)->passwordConfirmation($request->getParam('password')),
        ]);

        if ($validation->failed()) {
            $errors = $_SESSION['errors'];
            return $this->view->render($response, 'register.twig', compact('errors'));
        }

        $user = User::create([
            'email' => $request->getParam('email'),
            'full_name' => $request->getParam('full_name'),
            'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
        ]);

        //set by default simple role
        $user->role_id = 1;

        $user->save();

        $success = "Your account has been created successfully";
        return $this->view->render($response, 'login.twig', compact('success'));


    }
}