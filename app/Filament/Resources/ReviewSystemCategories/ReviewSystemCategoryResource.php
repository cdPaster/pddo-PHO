<?php

namespace App\Filament\Resources\ReviewSystemCategories;

use App\Filament\Resources\ReviewSystemCategories\Pages\CreateReviewSystemCategory;
use App\Filament\Resources\ReviewSystemCategories\Pages\EditReviewSystemCategory;
use App\Filament\Resources\ReviewSystemCategories\Pages\ListReviewSystemCategories;
use App\Filament\Resources\ReviewSystemCategories\Schemas\ReviewSystemCategoryForm;
use App\Filament\Resources\ReviewSystemCategories\Tables\ReviewSystemCategoriesTable;
use App\Models\ReviewSystemCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReviewSystemCategoryResource extends Resource
{
    protected static ?string $model = ReviewSystemCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ReviewSystemCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReviewSystemCategoriesTable::configure($table);
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
            'index' => ListReviewSystemCategories::route('/'),
            'create' => CreateReviewSystemCategory::route('/create'),
            'edit' => EditReviewSystemCategory::route('/{record}/edit'),
        ];
    }
}
