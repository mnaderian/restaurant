<?php

namespace App\Filament\Manager\Resources\RestaurantWorkingHours\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RestaurantWorkingHoursTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('restaurant.name')
                    ->label('رستوران')
                    ->searchable(),
                TextColumn::make('day')
                    ->label('روز')
                    ->searchable(),
                TextColumn::make('open_time')
                    ->label('ساعت شروع')
                    ->jalaliDateTime('H:i')
                    ->sortable(),
                TextColumn::make('close_time')
                    ->label('ساعت پایان')
                    ->jalaliDateTime('H:i')
                    ->sortable(),
                IconColumn::make('is_closed')
                    ->label('تعطیل')
                    ->boolean()
                    ->trueColor('danger')
                    ->falseColor('success')
                    ->trueIcon(Heroicon::OutlinedFaceFrown)
                    ->falseIcon(Heroicon::OutlinedFaceSmile),
                TextColumn::make('created_at')
                    ->label('تاریخ ایجاد')
                    ->jalaliDateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('تاریخ بروزرسانی')
                    ->jalaliDateTime()
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
