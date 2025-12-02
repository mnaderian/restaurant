<?php

namespace App\Filament\User\Resources\Reservations\Tables;

use App\Enums\ReservationStatus;
use App\Models\Reservation;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
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
                    ->state(fn($record) => $record->reservation_status->label())
                    ->label('وضعیت')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        ReservationStatus::PENDING_APPROVAL->label() => 'danger',
                        ReservationStatus::PENDING_PAYMENT->label() => 'warning',
                        ReservationStatus::APPROVED->label() => 'success',
                        ReservationStatus::CANCELLED->label() => 'gray',
                    })
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
                Action::make('cancel-reservation')
                    ->label('لغو رزرو')
                    ->color('danger')
                    ->icon('heroicon-o-x-circle')
                    ->requiresConfirmation()
                    ->modalHeading('لغو رزرو')
                    ->modalDescription('آیا از لغو رزرو اطمینان دارید؟')
                    ->modalSubmitActionLabel('بله، لغو کن')
                    ->modalCancelActionLabel('خیر')
                    ->button()
                    ->visible(fn($record) => $record->reservation_status != ReservationStatus::CANCELLED)
                    ->action(function ($record) {
                        $record->reservation_status = ReservationStatus::CANCELLED;
                        $record->save();
                        Notification::make()->title('رزرو با موفقیت لغو شد.')->success()->send();
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
