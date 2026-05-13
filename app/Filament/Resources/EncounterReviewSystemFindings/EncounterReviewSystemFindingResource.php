<?php

namespace App\Filament\Resources\EncounterReviewSystemFindings;

use App\Filament\Resources\EncounterReviewSystemFindings\Pages\CreateEncounterReviewSystemFinding;
use App\Filament\Resources\EncounterReviewSystemFindings\Pages\EditEncounterReviewSystemFinding;
use App\Filament\Resources\EncounterReviewSystemFindings\Pages\ListEncounterReviewSystemFindings;
use App\Filament\Resources\EncounterReviewSystemFindings\Schemas\EncounterReviewSystemFindingForm;
use App\Filament\Resources\EncounterReviewSystemFindings\Tables\EncounterReviewSystemFindingsTable;
use App\Models\EncounterReviewSystemFinding;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EncounterReviewSystemFindingResource extends Resource
{
    protected static ?string $model = EncounterReviewSystemFinding::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EncounterReviewSystemFindingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EncounterReviewSystemFindingsTable::configure($table);
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
            'index' => ListEncounterReviewSystemFindings::route('/'),
            'create' => CreateEncounterReviewSystemFinding::route('/create'),
            'edit' => EditEncounterReviewSystemFinding::route('/{record}/edit'),
        ];
    }
}
