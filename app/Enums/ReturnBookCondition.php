<?php

namespace App\Enums;

enum ReturnBookCondition: string
{
    case GOOD    = 'baik';
    case DAMAGED = 'rusak';
    case LOST    = 'hilang';

    public function label(): string
    {
        return match ($this) {
            self::GOOD    => 'Baik',
            self::DAMAGED => 'Rusak',
            self::LOST    => 'Hilang',
        };
    }
}
