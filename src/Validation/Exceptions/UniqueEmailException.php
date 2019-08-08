<?php


namespace Src\Validation\Exceptions;


use Respect\Validation\Exceptions\ValidationException;

class UniqueEmailException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} is already taken',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} is not already taken',
        ]
    ];
}