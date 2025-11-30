<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum ReservationStatus: string implements HasLabel
{
    case PENDING_PAYMENT = 'pending_payment';
    case PENDING_APPROVAL = 'pending_approval';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            Self::PENDING_PAYMENT => 'در انتظار پرداخت',
            Self::PENDING_APPROVAL => 'در انتظار تأیید',
            Self::CANCELLED => 'لغو شده',
        };
    }

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            Self::PENDING_PAYMENT => 'در انتظار پرداخت',
            Self::PENDING_APPROVAL => 'درانتظار تأیید',
            Self::CANCELLED => 'لغو شده',
        };
    }
}
