<?php

namespace App\Enums;

enum FinePaymentStatus: string
{
    case PENDING = 'tertunda';
    case FAILED  = 'gagal';
    case SUCCESS = 'sukses';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Tertunda',
            self::FAILED  => 'Gagal',
            self::SUCCESS => 'Sukses',
        };
    }
    
}