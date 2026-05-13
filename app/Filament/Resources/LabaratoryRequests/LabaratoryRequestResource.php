<?php

namespace App\Filament\Resources\LabaratoryRequests;

use App\Filament\Resources\LabaratoryRequests\Pages\CreateLabaratoryRequest;
use App\Filament\Resources\LabaratoryRequests\Pages\EditLabaratoryRequest;
use App\Filament\Resources\LabaratoryRequests\Pages\ListLabaratoryRequests;
use App\Filament\Resources\LabaratoryRequests\Schemas\LabaratoryRequestForm;
use App\Filament\Resources\LabaratoryRequests\Tables\LabaratoryRequestsTable;
use App\Models\LabaratoryRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LabaratoryRequestResource extends Resource
{
    protected static ?string $model = LabaratoryRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LabaratoryRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LabaratoryRequestsTable::configure($table);
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
            'index' => ListLabaratoryRequests::route('/'),
            'create' => CreateLabaratoryRequest::route('/create'),
            'edit' => EditLabaratoryRequest::route('/{record}/edit'),
        ];
    }
}
