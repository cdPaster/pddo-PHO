<?php

namespace App\Filament\Resources\PrescriptionItems\Pages;

use App\Filament\Resources\PrescriptionItems\PrescriptionItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrescriptionItem extends EditRecord
{
    protected static string $resource = PrescriptionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
