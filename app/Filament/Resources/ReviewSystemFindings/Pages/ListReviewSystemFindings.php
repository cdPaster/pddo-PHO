<?php

namespace App\Filament\Resources\ReviewSystemFindings\Pages;

use App\Filament\Resources\ReviewSystemFindings\ReviewSystemFindingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReviewSystemFindings extends ListRecords
{
    protected static string $resource = ReviewSystemFindingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
