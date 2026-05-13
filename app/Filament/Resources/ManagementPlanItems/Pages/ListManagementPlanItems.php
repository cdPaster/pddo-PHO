<?php

namespace App\Filament\Resources\ManagementPlanItems\Pages;

use App\Filament\Resources\ManagementPlanItems\ManagementPlanItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListManagementPlanItems extends ListRecords
{
    protected static string $resource = ManagementPlanItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
