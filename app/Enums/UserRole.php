<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum UserRole: string implements HasLabel
{
    case USER = 'user';
    case MANAGER = 'manager';
    case ADMIN = 'admin';

    public function label(): string
    {
        return match ($this) {
            self::USER => 'کاربر معمولی',
            self::MANAGER => 'مدیر رستوران',
            self::ADMIN => 'ادمین',
        };
    }

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::USER => 'کاربر معمولی',
            self::MANAGER => 'مدیر رستوران',
            self::ADMIN => 'ادمین',
        };
    }
}
