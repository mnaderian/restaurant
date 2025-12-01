<?php

namespace App\Filament\Manager\Resources\RestaurantWorkingHours\Pages;

use App\Filament\Manager\Resources\RestaurantWorkingHours\RestaurantWorkingHourResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRestaurantWorkingHours extends ListRecords
{
    protected static string $resource = RestaurantWorkingHourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
