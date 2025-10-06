<?php

namespace App\Enums;

enum UserGender: string
{
    case MALE = 'laki-laki';
    case FEMALE = 'perempuan';

    public function label(): string
    {
        return match ($this) {
            self::MALE   => 'Laki-laki',
            self::FEMALE => 'Perempuan',
        };
    }
}
