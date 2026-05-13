<?php

namespace App\Filament\Resources\MedicineDispenseItems\Pages;

use App\Filament\Resources\MedicineDispenseItems\MedicineDispenseItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMedicineDispenseItems extends ListRecords
{
    protected static string $resource = MedicineDispenseItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
