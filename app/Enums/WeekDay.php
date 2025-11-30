<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum WeekDay: string implements HasLabel
{
    case SATURDAY = 'شنبه';
    case SUNDAY = 'یکشنبه';
    case MONDAY = 'دوشنبه';
    case TUESDAY = 'سه‌شنبه';
    case WEDNESDAY = 'چهارشنبه';
    case THURSDAY = 'پنجشنبه';
    case FRIDAY = 'جمعه';

    public function label(): string
    {
        return match ($this) {
            self::SATURDAY => 'شنبه',
            self::SUNDAY => 'یکشنبه',
            self::MONDAY => 'دوشنبه',
            self::TUESDAY => 'سه‌شنبه',
            self::WEDNESDAY => 'چهارشنبه',
            self::THURSDAY => 'پنجشنبه',
            self::FRIDAY => 'جمعه',
        };
    }

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::SATURDAY => 'شنبه',
            self::SUNDAY => 'یکشنبه',
            self::MONDAY => 'دوشنبه',
            self::TUESDAY => 'سه‌شنبه',
            self::WEDNESDAY => 'چهارشنبه',
            self::THURSDAY => 'پنجشنبه',
            self::FRIDAY => 'جمعه',
        };
    }


}
