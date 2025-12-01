<?php

namespace App\Filament\Resources\Reservations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReservationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('restaurant.name')
                    ->label('رستوران')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('restaurantTable.title')
                    ->label('میز')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('رزرو کننده')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('guests_count')
                    ->label('تعداد نفرات')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('start_time')
                    ->label('شروع')
                    ->jalaliDateTime('j F Y, H:i')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('end_time')
                    ->label('پایان')
                    ->jalaliDateTime('j F Y, H:i')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('reservation_status')
                    ->state(fn ($record) => $record->reservation_status->label())
                    ->label('وضعیت')
                    ->badge()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('تاریخ ایجاد')
                    ->jalaliDateTime('j F Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('تاریخ بروزرسانی')
                    ->jalaliDateTime('j F Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
