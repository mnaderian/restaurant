<?php

namespace App\Filament\Manager\Resources\RestaurantTables;

use App\Filament\Manager\Resources\RestaurantTables\Pages\CreateRestaurantTable;
use App\Filament\Manager\Resources\RestaurantTables\Pages\EditRestaurantTable;
use App\Filament\Manager\Resources\RestaurantTables\Pages\ListRestaurantTables;
use App\Filament\Manager\Resources\RestaurantTables\Schemas\RestaurantTableForm;
use App\Filament\Manager\Resources\RestaurantTables\Tables\RestaurantTablesTable;
use App\Models\RestaurantTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class RestaurantTableResource extends Resource
{
    protected static ?string $model = RestaurantTable::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $modelLabel = 'میز';

    protected static ?string $pluralModelLabel = 'میزها';

    public static function form(Schema $schema): Schema
    {
        return RestaurantTableForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RestaurantTablesTable::configure($table);
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
            'index' => ListRestaurantTables::route('/'),
            'create' => CreateRestaurantTable::route('/create'),
            'edit' => EditRestaurantTable::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        if (! $user->restaurant) {
        return parent::getEloquentQuery()->whereNull('id');
    }
        return parent::getEloquentQuery()
            ->where('restaurant_id', $user->restaurant->id);
    }
}
