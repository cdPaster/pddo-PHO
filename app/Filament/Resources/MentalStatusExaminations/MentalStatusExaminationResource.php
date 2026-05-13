<?php

namespace App\Filament\Resources\MentalStatusExaminations;

use App\Filament\Resources\MentalStatusExaminations\Pages\CreateMentalStatusExamination;
use App\Filament\Resources\MentalStatusExaminations\Pages\EditMentalStatusExamination;
use App\Filament\Resources\MentalStatusExaminations\Pages\ListMentalStatusExaminations;
use App\Filament\Resources\MentalStatusExaminations\Schemas\MentalStatusExaminationForm;
use App\Filament\Resources\MentalStatusExaminations\Tables\MentalStatusExaminationsTable;
use App\Models\MentalStatusExamination;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MentalStatusExaminationResource extends Resource
{
    protected static ?string $model = MentalStatusExamination::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MentalStatusExaminationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MentalStatusExaminationsTable::configure($table);
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
            'index' => ListMentalStatusExaminations::route('/'),
            'create' => CreateMentalStatusExamination::route('/create'),
            'edit' => EditMentalStatusExamination::route('/{record}/edit'),
        ];
    }
}
