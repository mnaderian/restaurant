<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RestaurantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('food_type')
                    ->required()
                    ->default('ایرانی'),
                TextInput::make('address'),
                Toggle::make('external_environment')
                    ->required(),
                Toggle::make('internal_environment')
                    ->required(),
                TextInput::make('points')
                    ->required()
                    ->numeric()
                    ->default(0),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('menu_id')
                    ->numeric(),
                TextInput::make('user_id')
                    ->numeric(),
                TextInput::make('services'),
            ]);
    }
}
