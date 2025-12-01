<?php

namespace App\Filament\Manager\Resources\RestaurantWorkingHours\Schemas;

use App\Enums\WeekDay;
use App\Models\Restaurant;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RestaurantWorkingHourForm
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
                Select::make('day')
                    ->label('روز هفته')
                    ->enum(WeekDay::class)
                    ->options(WeekDay::class)
                    ->required(),
                Toggle::make('is_closed')
                    ->label('تعطیل')
                    ->columnSpan(2)
                    ->reactive(),
                TimePicker::make('open_time')
                    ->label('ساعت شروع')
                    ->jalali()
                    ->visible(fn($get) => !$get('is_closed'))
                    ->required(fn($get) => !$get('is_closed')),
                TimePicker::make('close_time')
                    ->label('ساعت پایان')
                    ->jalali()
                    ->visible(fn($get) => !$get('is_closed'))
                    ->required(fn($get) => !$get('is_closed')),
            ]);
    }
}
