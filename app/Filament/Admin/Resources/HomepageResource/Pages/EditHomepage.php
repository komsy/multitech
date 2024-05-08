<?php

namespace App\Filament\Admin\Resources\HomepageResource\Pages;

use App\Filament\Admin\Resources\HomepageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepage extends EditRecord
{
    protected static string $resource = HomepageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
