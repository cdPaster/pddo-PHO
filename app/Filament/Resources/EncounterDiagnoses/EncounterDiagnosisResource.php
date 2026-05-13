<?php

namespace App\Filament\Resources\EncounterDiagnoses;

use App\Filament\Resources\EncounterDiagnoses\Pages\CreateEncounterDiagnosis;
use App\Filament\Resources\EncounterDiagnoses\Pages\EditEncounterDiagnosis;
use App\Filament\Resources\EncounterDiagnoses\Pages\ListEncounterDiagnoses;
use App\Filament\Resources\EncounterDiagnoses\Schemas\EncounterDiagnosisForm;
use App\Filament\Resources\EncounterDiagnoses\Tables\EncounterDiagnosesTable;
use App\Models\EncounterDiagnosis;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EncounterDiagnosisResource extends Resource
{
    protected static ?string $model = EncounterDiagnosis::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EncounterDiagnosisForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EncounterDiagnosesTable::configure($table);
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
            'index' => ListEncounterDiagnoses::route('/'),
            'create' => CreateEncounterDiagnosis::route('/create'),
            'edit' => EditEncounterDiagnosis::route('/{record}/edit'),
        ];
    }
}
