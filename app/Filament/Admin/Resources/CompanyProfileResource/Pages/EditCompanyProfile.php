<?php

namespace App\Filament\Admin\Resources\CompanyProfileResource\Pages;

use App\Filament\Admin\Resources\CompanyProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\facades\Filament;

class EditCompanyProfile extends EditRecord
{
    protected static string $resource = CompanyProfileResource::class;

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
