<?php

namespace App\Filament\Admin\Resources\TestmonialsResource\Pages;

use App\Filament\Admin\Resources\TestmonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;
use Filament\Notifications\Notification;
use Filament\facades\Filament;

class CreateTestmonials extends CreateRecord
{
    protected static string $resource = TestmonialsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Data saved successfully!';
    }
}
