<?php

namespace App\Filament\Resources\ReviewSystemCategories\Pages;

use App\Filament\Resources\ReviewSystemCategories\ReviewSystemCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReviewSystemCategories extends ListRecords
{
    protected static string $resource = ReviewSystemCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
