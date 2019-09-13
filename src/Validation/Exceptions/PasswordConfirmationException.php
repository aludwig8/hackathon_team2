<?php


namespace Src\Validation\Exceptions;


use Respect\Validation\Exceptions\ValidationException;

class PasswordConfirmationException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Passwords does not match',
        ]
    ];
}