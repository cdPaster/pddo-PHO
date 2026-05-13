<?php

namespace App\Filament\Resources\EncounterMseFindings\Pages;

use App\Filament\Resources\EncounterMseFindings\EncounterMseFindingsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEncounterMseFindings extends ListRecords
{
    protected static string $resource = EncounterMseFindingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
