<?php

namespace App\Filament\Resources\EncounterMseFindings;

use App\Filament\Resources\EncounterMseFindings\Pages\CreateEncounterMseFindings;
use App\Filament\Resources\EncounterMseFindings\Pages\EditEncounterMseFindings;
use App\Filament\Resources\EncounterMseFindings\Pages\ListEncounterMseFindings;
use App\Filament\Resources\EncounterMseFindings\Schemas\EncounterMseFindingsForm;
use App\Filament\Resources\EncounterMseFindings\Tables\EncounterMseFindingsTable;
use App\Models\EncounterMseFindings;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EncounterMseFindingsResource extends Resource
{
    protected static ?string $model = EncounterMseFindings::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EncounterMseFindingsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EncounterMseFindingsTable::configure($table);
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
            'index' => ListEncounterMseFindings::route('/'),
            'create' => CreateEncounterMseFindings::route('/create'),
            'edit' => EditEncounterMseFindings::route('/{record}/edit'),
        ];
    }
}
