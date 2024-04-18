<?php

namespace App\Filament\Resources\IndexImageResource\Pages;

use App\Filament\Resources\IndexImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndexImages extends ListRecords
{
    protected static string $resource = IndexImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
