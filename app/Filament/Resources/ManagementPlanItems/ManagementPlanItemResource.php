<?php

namespace App\Filament\Resources\ManagementPlanItems;

use App\Filament\Resources\ManagementPlanItems\Pages\CreateManagementPlanItem;
use App\Filament\Resources\ManagementPlanItems\Pages\EditManagementPlanItem;
use App\Filament\Resources\ManagementPlanItems\Pages\ListManagementPlanItems;
use App\Filament\Resources\ManagementPlanItems\Schemas\ManagementPlanItemForm;
use App\Filament\Resources\ManagementPlanItems\Tables\ManagementPlanItemsTable;
use App\Models\ManagementPlanItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ManagementPlanItemResource extends Resource
{
    protected static ?string $model = ManagementPlanItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ManagementPlanItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ManagementPlanItemsTable::configure($table);
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
            'index' => ListManagementPlanItems::route('/'),
            'create' => CreateManagementPlanItem::route('/create'),
            'edit' => EditManagementPlanItem::route('/{record}/edit'),
        ];
    }
}
