<?php

namespace App\Filament\Resources\EncounterDiagnoses\Pages;

use App\Filament\Resources\EncounterDiagnoses\EncounterDiagnosisResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEncounterDiagnoses extends ListRecords
{
    protected static string $resource = EncounterDiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
