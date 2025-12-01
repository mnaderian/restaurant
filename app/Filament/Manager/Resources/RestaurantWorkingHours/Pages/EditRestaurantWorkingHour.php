<?php

namespace App\Filament\Manager\Resources\RestaurantWorkingHours\Pages;

use App\Filament\Manager\Resources\RestaurantWorkingHours\RestaurantWorkingHourResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRestaurantWorkingHour extends EditRecord
{
    protected static string $resource = RestaurantWorkingHourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
