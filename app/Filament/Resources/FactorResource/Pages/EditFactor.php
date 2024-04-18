<?php

namespace App\Filament\Resources\FactorResource\Pages;

use App\Filament\Resources\FactorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFactor extends EditRecord
{
    protected static string $resource = FactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
