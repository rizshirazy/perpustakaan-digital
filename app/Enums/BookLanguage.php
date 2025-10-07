<?php

namespace App\Enums;

enum BookLanguage: string
{
    case INDONESIAN = 'indonesia';
    case ENGLISH    = 'inggris';
    case JAPAN      = 'jepang';

    public function label(): string
    {
        return match ($this) {
            self::INDONESIAN => 'Indonesia',
            self::ENGLISH    => 'Inggris',
            self::JAPAN      => 'Jepang',
        };
    }
}
