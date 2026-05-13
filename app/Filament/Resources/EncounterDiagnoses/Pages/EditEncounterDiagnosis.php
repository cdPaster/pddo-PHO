<?php

namespace App\Filament\Resources\EncounterDiagnoses\Pages;

use App\Filament\Resources\EncounterDiagnoses\EncounterDiagnosisResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEncounterDiagnosis extends EditRecord
{
    protected static string $resource = EncounterDiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
