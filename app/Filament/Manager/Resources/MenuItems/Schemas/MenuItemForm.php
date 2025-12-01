<?php

namespace App\Filament\Manager\Resources\MenuItems\Schemas;

use App\Models\Restaurant;
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
                    ->options(Restaurant::where(
                        'user_id', auth()->user()->id)->pluck('name', 'id'))
                    ->required(),
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
