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
                TextColumn::make('table.title')
                    ->label('میز')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('رزرو کننده')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('start_time')
                    ->label('شروع')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('end_time')
                    ->label('پایان')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('تاریخ ایجاد')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('تاریخ بروزرسانی')
                    ->dateTime()
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
