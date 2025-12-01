<?php

namespace App\Filament\User\Resources\Reservations;

use App\Filament\User\Resources\Reservations\Pages\CreateReservation;
use App\Filament\User\Resources\Reservations\Pages\EditReservation;
use App\Filament\User\Resources\Reservations\Pages\ListReservations;
use App\Filament\User\Resources\Reservations\Schemas\ReservationForm;
use App\Filament\User\Resources\Reservations\Tables\ReservationsTable;
use App\Models\Reservation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookmarkSquare;

    protected static ?string $recordTitleAttribute = 'id';

    protected static ?string $modelLabel = 'رزرو';

    protected static ?string $pluralModelLabel = 'رزروها';

    public static function form(Schema $schema): Schema
    {
        return ReservationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReservationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReservations::route('/'),
            'create' => CreateReservation::route('/create'),
            'edit' => EditReservation::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();
        return parent::getEloquentQuery()
            ->where('user_id', $user->id);
    }
}
