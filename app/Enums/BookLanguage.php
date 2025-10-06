<?php

namespace App\Enums;

enum BookLanguage: string
{
    case INDONESIA = 'indonesia';
    case ENGLISH   = 'inggris';
    case JAPAN     = 'jepang';

    public function label(): string
    {
        return match($this) {
            self::INDONESIA => 'Indonesia',
            self::ENGLISH   => 'Inggris',
            self::JAPAN     => 'Jepang',
        };
    }
}
