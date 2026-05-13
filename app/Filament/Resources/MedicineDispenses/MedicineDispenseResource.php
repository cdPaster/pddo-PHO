<?php

namespace App\Filament\Resources\MedicineDispenses;

use App\Filament\Resources\MedicineDispenses\Pages\CreateMedicineDispense;
use App\Filament\Resources\MedicineDispenses\Pages\EditMedicineDispense;
use App\Filament\Resources\MedicineDispenses\Pages\ListMedicineDispenses;
use App\Filament\Resources\MedicineDispenses\Schemas\MedicineDispenseForm;
use App\Filament\Resources\MedicineDispenses\Tables\MedicineDispensesTable;
use App\Models\MedicineDispense;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MedicineDispenseResource extends Resource
{
    protected static ?string $model = MedicineDispense::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MedicineDispenseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MedicineDispensesTable::configure($table);
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
            'index' => ListMedicineDispenses::route('/'),
            'create' => CreateMedicineDispense::route('/create'),
            'edit' => EditMedicineDispense::route('/{record}/edit'),
        ];
    }
}
