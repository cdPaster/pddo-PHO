<?php

namespace App\Filament\Resources\PrescriptionItems\Pages;

use App\Filament\Resources\PrescriptionItems\PrescriptionItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePrescriptionItem extends CreateRecord
{
    protected static string $resource = PrescriptionItemResource::class;
}
