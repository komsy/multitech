<?php

namespace App\Filament\App\Pages;

use App\Livewire\Customer\DailyCustomers;
use App\Livewire\Customer\WeeklyCustomers;
use App\Livewire\Customer\MonthlyCustomers;
use App\Livewire\Customer\DetailedCustomers;
use Filament\Pages\Page;

class CustomerDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static string $view = 'filament.app.pages.customer-dashboard';
    protected ?string $maxContentWidth = 'full';

    protected static ?string $navigationGroup = 'Reports';

    protected ?string $subheading = 'Mpesa Customers';

    protected function getFooterWidgets(): array
    {
        return [
            DailyCustomers::class,
            WeeklyCustomers::class,
            // MonthlyCustomers::class,
            DetailedCustomers::class,
        ];
    }

}
