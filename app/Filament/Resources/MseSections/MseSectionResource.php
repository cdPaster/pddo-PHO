<?php

namespace App\Filament\Resources\MseSections;

use App\Filament\Resources\MseSections\Pages\CreateMseSection;
use App\Filament\Resources\MseSections\Pages\EditMseSection;
use App\Filament\Resources\MseSections\Pages\ListMseSections;
use App\Filament\Resources\MseSections\Schemas\MseSectionForm;
use App\Filament\Resources\MseSections\Tables\MseSectionsTable;
use App\Models\MseSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MseSectionResource extends Resource
{
    protected static ?string $model = MseSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MseSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MseSectionsTable::configure($table);
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
            'index' => ListMseSections::route('/'),
            'create' => CreateMseSection::route('/create'),
            'edit' => EditMseSection::route('/{record}/edit'),
        ];
    }
}
