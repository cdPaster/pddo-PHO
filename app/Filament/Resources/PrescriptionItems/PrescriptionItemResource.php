<?php

namespace App\Filament\Resources\PrescriptionItems;

use App\Filament\Resources\PrescriptionItems\Pages\CreatePrescriptionItem;
use App\Filament\Resources\PrescriptionItems\Pages\EditPrescriptionItem;
use App\Filament\Resources\PrescriptionItems\Pages\ListPrescriptionItems;
use App\Filament\Resources\PrescriptionItems\Schemas\PrescriptionItemForm;
use App\Filament\Resources\PrescriptionItems\Tables\PrescriptionItemsTable;
use App\Models\PrescriptionItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PrescriptionItemResource extends Resource
{
    protected static ?string $model = PrescriptionItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PrescriptionItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrescriptionItemsTable::configure($table);
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
            'index' => ListPrescriptionItems::route('/'),
            'create' => CreatePrescriptionItem::route('/create'),
            'edit' => EditPrescriptionItem::route('/{record}/edit'),
        ];
    }
}
