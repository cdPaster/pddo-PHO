<?php

namespace App\Filament\Resources\LabaratoryRequests\Pages;

use App\Filament\Resources\LabaratoryRequests\LabaratoryRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLabaratoryRequests extends ListRecords
{
    protected static string $resource = LabaratoryRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
