<?php

namespace App\Filament\Admin\Resources\WhyChooseUsResource\Pages;

use App\Filament\Admin\Resources\WhyChooseUsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;
use Filament\Notifications\Notification;
use Filament\facades\Filament;
use Carbon\Carbon;

class CreateWhyChooseUs extends CreateRecord
{
    protected static string $resource = WhyChooseUsResource::class;
 
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Filament::auth()->id();;
    
        return $data;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Data saved successfully!';
    }
    // protected function afterCreate(): void
    // {
    //     dd($this->data);
    //     // Runs after the form fields are saved to the database.
    // }
}
