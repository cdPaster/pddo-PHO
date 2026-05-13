<?php

namespace App\Filament\Resources\MseFindings;

use App\Filament\Resources\MseFindings\Pages\CreateMseFinding;
use App\Filament\Resources\MseFindings\Pages\EditMseFinding;
use App\Filament\Resources\MseFindings\Pages\ListMseFindings;
use App\Filament\Resources\MseFindings\Schemas\MseFindingForm;
use App\Filament\Resources\MseFindings\Tables\MseFindingsTable;
use App\Models\MseFinding;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MseFindingResource extends Resource
{
    protected static ?string $model = MseFinding::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MseFindingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MseFindingsTable::configure($table);
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
            'index' => ListMseFindings::route('/'),
            'create' => CreateMseFinding::route('/create'),
            'edit' => EditMseFinding::route('/{record}/edit'),
        ];
    }
}
