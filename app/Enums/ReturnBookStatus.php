<?php

namespace App\Enums;

enum ReturnBookStatus
{
    case RETURNED = 'dikembalikan';
    case CHECKED  = 'pengecekan';
    case FINE     = 'denda';

    public function label(): string
    {
        return match ($this) {
            self::RETURNED => 'Dikembalikan',
            self::CHECKED  => 'Pengecekan',
            self::FINE     => 'Denda',
        };
    }
}
