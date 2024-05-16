<?php

namespace App\Filament\Admin\Resources\WhyChooseUsResource\Pages;

use App\Filament\Admin\Resources\WhyChooseUsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\facades\Filament;

class EditWhyChooseUs extends EditRecord
{
    protected static string $resource = WhyChooseUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Filament::auth()->id();;
    
        return $data;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
