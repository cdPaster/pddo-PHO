<?php

namespace App\Filament\Resources\MedicineDispenseItems\Pages;

use App\Filament\Resources\MedicineDispenseItems\MedicineDispenseItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMedicineDispenseItem extends EditRecord
{
    protected static string $resource = MedicineDispenseItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
