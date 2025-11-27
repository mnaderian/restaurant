<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum FoodType: string implements HasLabel
{
    case FASTFOOD = 'فست فود';
    case IRANIAN = 'ایرانی';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::FASTFOOD => 'فست فود',
            self::IRANIAN => 'ایرانی',
        };
    }
}
