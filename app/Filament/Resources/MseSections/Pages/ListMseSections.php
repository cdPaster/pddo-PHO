<?php

namespace App\Filament\Resources\MseSections\Pages;

use App\Filament\Resources\MseSections\MseSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMseSections extends ListRecords
{
    protected static string $resource = MseSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
