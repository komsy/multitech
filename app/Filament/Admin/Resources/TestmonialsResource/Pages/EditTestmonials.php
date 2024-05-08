<?php

namespace App\Filament\Admin\Resources\TestmonialsResource\Pages;

use App\Filament\Admin\Resources\TestmonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\facades\Filament;

class EditTestmonials extends EditRecord
{
    protected static string $resource = TestmonialsResource::class;

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
