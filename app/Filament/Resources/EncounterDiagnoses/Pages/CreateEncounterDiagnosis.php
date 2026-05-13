<?php

namespace App\Filament\Resources\EncounterDiagnoses\Pages;

use App\Filament\Resources\EncounterDiagnoses\EncounterDiagnosisResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEncounterDiagnosis extends CreateRecord
{
    protected static string $resource = EncounterDiagnosisResource::class;
}
