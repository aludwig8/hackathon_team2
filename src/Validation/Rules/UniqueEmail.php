<?php


namespace Src\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use Src\Model\User;

/**
 * Class UniqueEmail
 *
 * @package Src\Validation\Rules
 */
class UniqueEmail extends AbstractRule
{
    public function validate($input)
    {
        return User::where('email',$input)->count() === 0;
    }
}