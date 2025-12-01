<?php

namespace App\Filament\Manager\Resources\Reservations\Schemas;

use App\Enums\ReservationStatus;
use App\Models\Restaurant;
use App\Models\RestaurantTable;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
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
                    ->options(Restaurant::where(
                        'user_id', auth()->user()->id)->pluck('name', 'id'))
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
                    ->options(User::pluck('name', 'id'))
                    ->searchable(),
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
                    ->required()
                    ->enum(ReservationStatus::class)
                    ->options(ReservationStatus::class)
                    ->afterStateUpdated(function ($state, $record) {
                        if ($record) {
                            $record->reservation_status = $state;
                            $record->save();
                        }
                    }),
            ]);
    }
}
