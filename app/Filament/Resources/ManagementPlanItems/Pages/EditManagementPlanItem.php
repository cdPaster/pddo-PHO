<?php

namespace App\Filament\Resources\ManagementPlanItems\Pages;

use App\Filament\Resources\ManagementPlanItems\ManagementPlanItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditManagementPlanItem extends EditRecord
{
    protected static string $resource = ManagementPlanItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
