<?php

namespace App\Filament\Resources\PrescriptionItems\Pages;

use App\Filament\Resources\PrescriptionItems\PrescriptionItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrescriptionItems extends ListRecords
{
    protected static string $resource = PrescriptionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
