<?php

namespace App\Filament\Admin\Resources\TestmonialsResource\Pages;

use App\Filament\Admin\Resources\TestmonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestmonials extends ListRecords
{
    protected static string $resource = TestmonialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
