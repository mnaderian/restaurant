<?php

namespace App\Filament\Manager\Resources\Reservations\Pages;

use App\Filament\Manager\Resources\Reservations\ReservationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReservation extends CreateRecord
{
    protected static string $resource = ReservationResource::class;
}
