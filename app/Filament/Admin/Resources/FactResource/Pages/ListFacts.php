<?php

namespace App\Filament\Admin\Resources\FactResource\Pages;

use App\Filament\Admin\Resources\FactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFacts extends ListRecords
{
    protected static string $resource = FactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
