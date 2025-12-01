<?php

namespace App\Filament\User\Resources\Reservations\Pages;

use App\Filament\User\Resources\Reservations\ReservationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReservation extends CreateRecord
{
    protected static string $resource = ReservationResource::class;
}
