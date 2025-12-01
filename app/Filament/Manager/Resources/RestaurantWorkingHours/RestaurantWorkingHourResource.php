<?php

namespace App\Filament\Manager\Resources\RestaurantWorkingHours;

use App\Filament\Manager\Resources\RestaurantWorkingHours\Pages\CreateRestaurantWorkingHour;
use App\Filament\Manager\Resources\RestaurantWorkingHours\Pages\EditRestaurantWorkingHour;
use App\Filament\Manager\Resources\RestaurantWorkingHours\Pages\ListRestaurantWorkingHours;
use App\Filament\Manager\Resources\RestaurantWorkingHours\Schemas\RestaurantWorkingHourForm;
use App\Filament\Manager\Resources\RestaurantWorkingHours\Tables\RestaurantWorkingHoursTable;
use App\Models\RestaurantWorkingHour;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class RestaurantWorkingHourResource extends Resource
{
    protected static ?string $model = RestaurantWorkingHour::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClock;

    protected static ?string $recordTitleAttribute = 'day';

    protected static ?string $modelLabel = 'ساعت کاری';

    protected static ?string $pluralModelLabel = 'ساعات کاری';

    public static function form(Schema $schema): Schema
    {
        return RestaurantWorkingHourForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RestaurantWorkingHoursTable::configure($table);
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
            'index' => ListRestaurantWorkingHours::route('/'),
            'create' => CreateRestaurantWorkingHour::route('/create'),
            'edit' => EditRestaurantWorkingHour::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();
        return parent::getEloquentQuery()
            ->where('restaurant_id', $user->restaurant->id);
    }
}
