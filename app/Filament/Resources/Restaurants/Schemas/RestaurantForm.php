<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use App\Enums\FoodType;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RestaurantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام رستوران')
                    ->required(),
                Select::make('food_type')
                    ->label('نوع غذا')
                    ->required()
                    ->options(FoodType::class)
                    ->enum(FoodType::class)
                    ->default(FoodType::IRANIAN),
                TextInput::make('address')
                    ->label('آدرس'),
                TextInput::make('phone')
                    ->label('تلفن')
                    ->tel(),
                Toggle::make('external_environment')
                    ->label('محیط خارجی')
                    ->required(),
                Toggle::make('internal_environment')
                    ->label('محیط داخلی')
                    ->required(),
                TextInput::make('user_id')
                    ->label('مدیر رستوران')
                    ->numeric(),
                TextInput::make('menu_id')
                    ->label('منو')
                    ->numeric(),
                TextInput::make('points')
                    ->label('امتیازات')
                    ->disabled()
                    ->numeric()
                    ->default(0)
                    ->hiddenOn('create'),
                FileUpload::make('image')
                    ->label('تصویر')
                    ->image(),
                RichEditor::make('services')
                    ->label('خدمات'),
            ]);
    }
}
