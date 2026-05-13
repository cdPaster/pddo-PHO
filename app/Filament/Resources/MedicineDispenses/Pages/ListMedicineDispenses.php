<?php

namespace App\Filament\Resources\MedicineDispenses\Pages;

use App\Filament\Resources\MedicineDispenses\MedicineDispenseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMedicineDispenses extends ListRecords
{
    protected static string $resource = MedicineDispenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
