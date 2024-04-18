<?php

namespace App\Filament\Resources\SaveProductResource\Pages;

use App\Filament\Resources\SaveProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaveProducts extends ListRecords
{
    protected static string $resource = SaveProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
