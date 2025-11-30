<?php

namespace App\Filament\Resources\MenuItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('restaurant_id')
                    ->label('رستوران')
                    ->relationship('restaurant', 'name')
                    ->required()
                    ->searchable(),
                TextInput::make('name')
                    ->label('نام غذا')
                    ->required(),
                TextInput::make('price')
                    ->label('قیمت')
                    ->required()
                    ->numeric()
                    ->prefix('تومان'),
                FileUpload::make('image')
                    ->label('عکس')
                    ->image(),
                Textarea::make('description')
                    ->label('توضیحات')
                    ->columnSpanFull(),
            ]);
    }
}
