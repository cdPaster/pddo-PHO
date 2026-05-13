<?php

namespace App\Filament\Resources\MseSections\Pages;

use App\Filament\Resources\MseSections\MseSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMseSection extends EditRecord
{
    protected static string $resource = MseSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
