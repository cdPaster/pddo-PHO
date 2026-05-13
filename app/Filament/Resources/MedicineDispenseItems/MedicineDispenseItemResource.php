<?php

namespace App\Filament\Resources\MedicineDispenseItems;

use App\Filament\Resources\MedicineDispenseItems\Pages\CreateMedicineDispenseItem;
use App\Filament\Resources\MedicineDispenseItems\Pages\EditMedicineDispenseItem;
use App\Filament\Resources\MedicineDispenseItems\Pages\ListMedicineDispenseItems;
use App\Filament\Resources\MedicineDispenseItems\Schemas\MedicineDispenseItemForm;
use App\Filament\Resources\MedicineDispenseItems\Tables\MedicineDispenseItemsTable;
use App\Models\MedicineDispenseItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MedicineDispenseItemResource extends Resource
{
    protected static ?string $model = MedicineDispenseItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MedicineDispenseItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MedicineDispenseItemsTable::configure($table);
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
            'index' => ListMedicineDispenseItems::route('/'),
            'create' => CreateMedicineDispenseItem::route('/create'),
            'edit' => EditMedicineDispenseItem::route('/{record}/edit'),
        ];
    }
}
