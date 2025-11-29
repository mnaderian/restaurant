<?php

namespace App\Filament\Resources\RestaurantTables\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RestaurantTableForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('restaurant_id')
                    ->relationship('restaurant', 'name')
                    ->required()
                    ->label('رستوران')
                    ->searchable(),
                TextInput::make('number')
                    ->required()
                    ->label('شماره میز')
                    ->default('0'),
                TextInput::make('capacity')
                    ->required()
                    ->label('ظرفیت')
                    ->numeric()
                    ->default(1),
            ]);
    }
}
