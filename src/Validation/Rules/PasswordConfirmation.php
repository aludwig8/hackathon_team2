<?php


namespace Src\Validation\Rules;


use Respect\Validation\Rules\AbstractRule;

class PasswordConfirmation extends AbstractRule
{

    protected $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function validate($input)
    {
        return password_verify($input, $this->password);
    }
}