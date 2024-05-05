<?php

namespace App\Filament\Admin\Resources\TestmonialsResource\Pages;

use App\Filament\Admin\Resources\TestmonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestmonials extends EditRecord
{
    protected static string $resource = TestmonialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
