<?php

namespace App\Filament\Resources\ReviewSystemFindings\Pages;

use App\Filament\Resources\ReviewSystemFindings\ReviewSystemFindingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReviewSystemFinding extends EditRecord
{
    protected static string $resource = ReviewSystemFindingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
