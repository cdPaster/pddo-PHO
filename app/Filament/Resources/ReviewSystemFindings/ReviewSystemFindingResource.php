<?php

namespace App\Filament\Resources\ReviewSystemFindings;

use App\Filament\Resources\ReviewSystemFindings\Pages\CreateReviewSystemFinding;
use App\Filament\Resources\ReviewSystemFindings\Pages\EditReviewSystemFinding;
use App\Filament\Resources\ReviewSystemFindings\Pages\ListReviewSystemFindings;
use App\Filament\Resources\ReviewSystemFindings\Schemas\ReviewSystemFindingForm;
use App\Filament\Resources\ReviewSystemFindings\Tables\ReviewSystemFindingsTable;
use App\Models\ReviewSystemFinding;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReviewSystemFindingResource extends Resource
{
    protected static ?string $model = ReviewSystemFinding::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ReviewSystemFindingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReviewSystemFindingsTable::configure($table);
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
            'index' => ListReviewSystemFindings::route('/'),
            'create' => CreateReviewSystemFinding::route('/create'),
            'edit' => EditReviewSystemFinding::route('/{record}/edit'),
        ];
    }
}
