<?php

namespace App\Filament\Resources\EncounterSignatures\Pages;

use App\Filament\Resources\EncounterSignatures\EncounterSignatureResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEncounterSignature extends EditRecord
{
    protected static string $resource = EncounterSignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
