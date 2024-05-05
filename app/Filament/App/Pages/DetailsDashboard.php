<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;
use App\Livewire\Details\DetailedTransaction;

class DetailsDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.details-dashboard';
    protected ?string $maxContentWidth = 'full';

    protected static ?string $navigationGroup = 'Reports';

    protected ?string $subheading = 'Mpesa Transactions';

    protected function getFooterWidgets(): array
    {
        return [
            DetailedTransaction::class,
        ];
    }
}
