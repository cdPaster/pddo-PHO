<?php

namespace App\Filament\Resources\ReviewSystemCategories\Pages;

use App\Filament\Resources\ReviewSystemCategories\ReviewSystemCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReviewSystemCategory extends EditRecord
{
    protected static string $resource = ReviewSystemCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
