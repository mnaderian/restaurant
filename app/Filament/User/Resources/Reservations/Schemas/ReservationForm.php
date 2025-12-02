<?php

namespace App\Filament\User\Resources\Reservations\Schemas;

use App\Enums\ReservationStatus;
use App\Models\Restaurant;
use App\Models\RestaurantTable;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('restaurant_id')
                    ->label('رستوران')
                    ->required()
                    ->options(Restaurant::all()->pluck('name', 'id'))
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('restaurant_table_id', null);
                    })
                    ->searchable(),
                Select::make('restaurant_table_id')
                    ->label('میز')
                    ->required()
                    ->options(function (callable $get) {
                        $restaurantId = $get('restaurant_id');
                        if (!$restaurantId) {
                            return [];
                        }
                        return RestaurantTable::where('restaurant_id', $restaurantId)->pluck('title', 'id');
                    })
                    ->searchable(),
                Select::make('user_id')
                    ->label('رزرو کننده')
                    ->required()
                    ->options(User::where('id', auth()->user()->id)->pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('guests_count')
                    ->label('تعداد نفرات')
                    ->required()
                    ->default(1)
                    ->numeric(),
                DateTimePicker::make('start_time')
                    ->label('شروع')
                    ->jalali()
                    ->required(),
                DateTimePicker::make('end_time')
                    ->label('پایان')
                    ->jalali()
                    ->required(),
                Select::make('reservation_status')
                    ->label('وضعیت')
                    ->options(ReservationStatus::class)
                    ->default(ReservationStatus::PENDING_APPROVAL)
                    ->disabled(),
            ]);
    }
}
