<?php

namespace App\Filament\Admin\Resources\AboutResource\Pages;

use App\Filament\Admin\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Filament\facades\Filament;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;
    
    
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
                ->title('About registered')
                ->body('The About has been created successfully.');
        }
}
