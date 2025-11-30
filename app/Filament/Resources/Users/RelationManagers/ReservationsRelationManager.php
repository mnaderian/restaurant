<?php

namespace App\Filament\Resources\Users\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ReservationsRelationManager extends RelationManager
{
    protected static string $relationship = 'reservations';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return 'تاریخچه رزروها';
    }

    protected static function getPluralModelLabel(): ?string
    {
        return 'رزروها';
    }

    protected static function getModelLabel(): ?string
    {
        return 'رزرو';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('restaurant_id')
                    ->label('رستوران')
                    ->relationship('restaurant', 'name')
                    ->required(),
                Select::make('restaurant_table_id')
                    ->label('میز')
                    ->relationship('restaurantTable', 'title')
                    ->required(),
                DateTimePicker::make('start_time')
                    ->label('شروع')
                    ->jalali()
                    ->required(),
                DateTimePicker::make('end_time')
                    ->label('پایان')
                    ->jalali()
                    ->required(),
            ]);
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('restaurant.name')
                    ->label('رستوران'),
                TextEntry::make('restaurantTable.title')
                    ->label('میز'),
                TextEntry::make('start_time')
                    ->label('شروع')
                    ->jalaliDateTime('j F Y, H:i'),
                TextEntry::make('end_time')
                    ->label('پایان')
                    ->jalaliDateTime('j F Y, H:i'),
                TextEntry::make('created_at')
                    ->label('تاریخ ایجاد')
                    ->jalaliDateTime('j F Y, H:i')
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('تاریخ بروزرسانی')
                    ->jalaliDateTime('j F Y, H:i')
                    ->placeholder('-'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('restaurant.name')
                    ->label('رستوران')
                    ->searchable(),
                TextColumn::make('restaurantTable.title')
                    ->label('میز')
                    ->searchable(),
                TextColumn::make('start_time')
                    ->label('شروع')
                    ->jalaliDateTime('j F Y, H:i')
                    ->sortable(),
                TextColumn::make('end_time')
                    ->label('پایان')
                    ->jalaliDateTime('j F Y, H:i')
                    ->sortable(),
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
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
