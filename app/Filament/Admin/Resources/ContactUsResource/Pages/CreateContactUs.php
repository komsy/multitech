<?php

namespace App\Filament\Admin\Resources\ContactUsResource\Pages;

use App\Filament\Admin\Resources\ContactUsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateContactUs extends CreateRecord
{
    protected static string $resource = ContactUsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Contact Us registered')
            ->body('The Contact Us has been created successfully.');
    }
}
