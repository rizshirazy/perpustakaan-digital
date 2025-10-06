<?php

namespace App\Enums;

enum MessageType: string
{
    case CREATED = 'Berhasil Menambahkan';
    case UPDATED = 'Berhasil Memperbarui';
    case DELETED = 'Berhasil Menghapus';
    case ERROR   = 'Terjadi Kesalahan';

    public function message(string $entity = '', ?string $error = null): string
    {
       if ($this === self::ERROR && $error) {
           return "{$this->value}. Error: {$error}";
       }

       return "{$this->value} {$entity}.";
    }
}
