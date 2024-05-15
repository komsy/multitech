<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;
use App\Livewire\ContactUs\ContactUsForm;

class CustomerInquiry extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.customer-inquiry';
    protected ?string $maxContentWidth = 'full';

    protected static ?string $navigationGroup = 'Reports';

    protected ?string $subheading = 'Contact Us Form Inquiry';


    protected function getFooterWidgets(): array
    {
        return [
            ContactUsForm::class,
        ];
    }
}