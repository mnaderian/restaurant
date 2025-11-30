<?php

namespace App\Filament\Resources\Restaurants\RelationManagers;

use App\Enums\WeekDay;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;

class WorkingHoursRelationManager extends RelationManager
{
    protected static string $relationship = 'workingHours';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return 'ساعات کاری';
    }

    protected static function getPluralModelLabel(): ?string
    {
        return 'ساعات کاری';
    }

    protected static function getModelLabel(): ?string
    {
        return 'ساعت کاری';
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day')->label('روز'),
                IconColumn::make('is_closed')
                    ->label('تعطیل')
                    ->boolean()
                    ->trueColor('danger')
                    ->falseColor('success')
                    ->trueIcon(Heroicon::OutlinedFaceFrown)
                    ->falseIcon(Heroicon::OutlinedFaceSmile),
                TextColumn::make('open_time')->label('شروع'),
                TextColumn::make('close_time')->label('پایان'),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('افزودن ساعت کاری'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('day')
                    ->label('روز هفته')
                    ->enum(WeekDay::class)
                    ->options(WeekDay::class)
                    ->required()
                    ->unique(ignoreRecord: true),
                Toggle::make('is_closed')
                    ->label('تعطیل است')
                    ->reactive(),
                TimePicker::make('open_time')
                    ->label('ساعت شروع')
                    ->visible(fn($get) => !$get('is_closed'))
                    ->required(fn($get) => !$get('is_closed')),
                TimePicker::make('close_time')
                    ->label('ساعت پایان')
                    ->visible(fn($get) => !$get('is_closed'))
                    ->required(fn($get) => !$get('is_closed')),
            ]);
    }
}
