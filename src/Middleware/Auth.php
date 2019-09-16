<?php


namespace Src\Middleware;


class Auth extends Middleware
{

    public function __invoke($request, $response, $next)
    {
        $authenticated = $this->auth->check();

        if (!$authenticated)
            return $response->withRedirect($this->router->pathFor('login'));

        $response = $next($request, $response);
        return $response;
    }
}