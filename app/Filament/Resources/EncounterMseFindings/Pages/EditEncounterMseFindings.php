<?php

namespace App\Filament\Resources\EncounterMseFindings\Pages;

use App\Filament\Resources\EncounterMseFindings\EncounterMseFindingsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEncounterMseFindings extends EditRecord
{
    protected static string $resource = EncounterMseFindingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
