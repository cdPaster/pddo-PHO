<?php

namespace App\Filament\Resources\EncounterReviewSystemFindings\Pages;

use App\Filament\Resources\EncounterReviewSystemFindings\EncounterReviewSystemFindingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEncounterReviewSystemFinding extends EditRecord
{
    protected static string $resource = EncounterReviewSystemFindingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
