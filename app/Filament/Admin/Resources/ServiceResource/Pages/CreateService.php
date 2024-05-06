<?php

namespace App\Filament\Admin\Resources\ServiceResource\Pages;

use App\Filament\Admin\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
    use Filament\Notifications\Notification;
    use Filament\facades\Filament;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Filament::auth()->id();;
    
        return $data;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Service registered')
            ->body('The Service has been created successfully.');
    }
}
