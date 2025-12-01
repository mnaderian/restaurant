<?php

namespace App\Filament\Manager\Resources\MenuItems;

use App\Filament\Manager\Resources\MenuItems\Pages\CreateMenuItem;
use App\Filament\Manager\Resources\MenuItems\Pages\EditMenuItem;
use App\Filament\Manager\Resources\MenuItems\Pages\ListMenuItems;
use App\Filament\Manager\Resources\MenuItems\Schemas\MenuItemForm;
use App\Filament\Manager\Resources\MenuItems\Tables\MenuItemsTable;
use App\Models\MenuItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = 'آیتم منو';

    protected static ?string $pluralModelLabel = 'آیتم‌های منو';

    public static function form(Schema $schema): Schema
    {
        return MenuItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MenuItemsTable::configure($table);
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
            'index' => ListMenuItems::route('/'),
            'create' => CreateMenuItem::route('/create'),
            'edit' => EditMenuItem::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();
        return parent::getEloquentQuery()
            ->where('restaurant_id', $user->restaurant->id);
    }
}
