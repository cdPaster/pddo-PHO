<?php

namespace App\Filament\Resources\EncounterSignatures\Pages;

use App\Filament\Resources\EncounterSignatures\EncounterSignatureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEncounterSignatures extends ListRecords
{
    protected static string $resource = EncounterSignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
