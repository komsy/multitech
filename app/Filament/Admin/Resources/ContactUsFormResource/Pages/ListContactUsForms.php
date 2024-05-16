<?php

namespace App\Filament\Admin\Resources\ContactUsFormResource\Pages;

use App\Filament\Admin\Resources\ContactUsFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactUsForms extends ListRecords
{
    protected static string $resource = ContactUsFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
