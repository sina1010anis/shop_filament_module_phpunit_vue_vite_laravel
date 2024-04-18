<?php

namespace App\Filament\Resources\SaveProductResource\Pages;

use App\Filament\Resources\SaveProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaveProduct extends EditRecord
{
    protected static string $resource = SaveProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
