<?php

namespace App\Filament\Resources\MseFindings\Pages;

use App\Filament\Resources\MseFindings\MseFindingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMseFindings extends ListRecords
{
    protected static string $resource = MseFindingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
