<?php

namespace App\Filament\Admin\Resources\ContactUsFormResource\Pages;

use App\Filament\Admin\Resources\ContactUsFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactUsForm extends EditRecord
{
    protected static string $resource = ContactUsFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
