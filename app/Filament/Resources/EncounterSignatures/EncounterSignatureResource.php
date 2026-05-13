<?php

namespace App\Filament\Resources\EncounterSignatures;

use App\Filament\Resources\EncounterSignatures\Pages\CreateEncounterSignature;
use App\Filament\Resources\EncounterSignatures\Pages\EditEncounterSignature;
use App\Filament\Resources\EncounterSignatures\Pages\ListEncounterSignatures;
use App\Filament\Resources\EncounterSignatures\Schemas\EncounterSignatureForm;
use App\Filament\Resources\EncounterSignatures\Tables\EncounterSignaturesTable;
use App\Models\EncounterSignature;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EncounterSignatureResource extends Resource
{
    protected static ?string $model = EncounterSignature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EncounterSignatureForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EncounterSignaturesTable::configure($table);
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
            'index' => ListEncounterSignatures::route('/'),
            'create' => CreateEncounterSignature::route('/create'),
            'edit' => EditEncounterSignature::route('/{record}/edit'),
        ];
    }
}
