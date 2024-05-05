<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;


class trnStatus extends Page implements HasForms
{
    // use InteractsWithForms;
    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.app.pages.trn-status';
    protected ?string $maxContentWidth = 'full';
    protected ?string $subheading = 'Query Mpesa Transaction';

    public User $user;

    public function mount() :void
    {
        $this->user = Filament::getCurrentPanel()->auth()->user();
        $this->form->fill();
    }

 
}
