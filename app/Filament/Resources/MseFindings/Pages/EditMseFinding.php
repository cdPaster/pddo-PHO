<?php

namespace App\Filament\Resources\MseFindings\Pages;

use App\Filament\Resources\MseFindings\MseFindingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMseFinding extends EditRecord
{
    protected static string $resource = MseFindingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
