<?php

namespace App\Filament\Resources\CardResource\Pages;

use App\Filament\Resources\CardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCard extends EditRecord
{
    protected static string $resource = CardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getCreatedNotificationMessage(): string
    {

        return 'محصول با موفقیت از سبد خرید ویرایش شد';

    }
}
