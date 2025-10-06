<?php

namespace App\Enums;

enum BookStatus: string
{
    case AVAILABLE   = 'tersedia';
    case UNAVAILABLE = 'tidak tersedia';
    case LOAN        = 'dipinjam';
    case LOST        = 'hilang';
    case DAMAGED     = 'rusak';

    public function label(): string
    {
        return match ($this) {
            self::AVAILABLE   => 'Tersedia',
            self::UNAVAILABLE => 'Tidak Tersedia',
            self::LOAN        => 'Dipinjam',
            self::LOST        => 'Hilang',
            self::DAMAGED     => 'Rusak',
        };
    }
}
