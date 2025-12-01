<?php

namespace App\Filament\Manager\Resources\Restaurants\Pages;

use App\Filament\Manager\Resources\Restaurants\RestaurantResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRestaurant extends CreateRecord
{
    protected static string $resource = RestaurantResource::class;
}
