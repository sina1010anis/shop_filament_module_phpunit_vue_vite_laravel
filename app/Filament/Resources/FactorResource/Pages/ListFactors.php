<?php

namespace App\Filament\Resources\FactorResource\Pages;

use App\Filament\Resources\FactorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFactors extends ListRecords
{
    protected static string $resource = FactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
