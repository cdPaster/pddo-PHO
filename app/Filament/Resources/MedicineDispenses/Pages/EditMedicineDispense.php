<?php

namespace App\Filament\Resources\MedicineDispenses\Pages;

use App\Filament\Resources\MedicineDispenses\MedicineDispenseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMedicineDispense extends EditRecord
{
    protected static string $resource = MedicineDispenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
