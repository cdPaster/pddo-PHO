<?php

namespace App\Filament\Resources\LabaratoryRequests\Pages;

use App\Filament\Resources\LabaratoryRequests\LabaratoryRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLabaratoryRequest extends EditRecord
{
    protected static string $resource = LabaratoryRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
