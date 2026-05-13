<?php

namespace App\Filament\Resources\EncounterReviewSystemFindings\Pages;

use App\Filament\Resources\EncounterReviewSystemFindings\EncounterReviewSystemFindingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEncounterReviewSystemFindings extends ListRecords
{
    protected static string $resource = EncounterReviewSystemFindingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
