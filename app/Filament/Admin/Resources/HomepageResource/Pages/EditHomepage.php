<?php

namespace App\Filament\Admin\Resources\HomepageResource\Pages;

use App\Filament\Admin\Resources\HomepageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\facades\Filament;

class EditHomepage extends EditRecord
{
    protected static string $resource = HomepageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
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
