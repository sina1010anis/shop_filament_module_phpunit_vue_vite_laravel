<?php

namespace App\Filament\Resources\IndexImageResource\Pages;

use App\Filament\Resources\IndexImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndexImage extends EditRecord
{
    protected static string $resource = IndexImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
