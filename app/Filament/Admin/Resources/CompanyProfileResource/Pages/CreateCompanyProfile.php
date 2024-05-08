<?php

namespace App\Filament\Admin\Resources\CompanyProfileResource\Pages;

use App\Filament\Admin\Resources\CompanyProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Filament\facades\Filament;

class CreateCompanyProfile extends CreateRecord
{
    protected static string $resource = HomepageResource::class;
      
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
                ->title('Company registered')
                ->body('The Company settings has been created successfully.');
        }
}
