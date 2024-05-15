<?php

namespace App\Livewire\ContactUs;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Support\Facades\DB;
use Filament\facades\Filament;
use Carbon\Carbon;

class ContactUsForm extends BaseWidget
{
        protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(\App\Models\ContactUsForm::query()
                ->join('services as s', 's.id', '=', 'contact_us_forms.service_id')
                ->whereNull('contact_us_forms.deleted_at')
                ->whereNull('s.deleted_at')
                ->select('contact_us_forms.*','s.serviceName'))
                ->striped()
            ->columns([
                TextColumn::make('Sr No.')->getStateUsing(
                    static function ($rowLoop, HasTable $livewire): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),
                TextColumn::make('service.serviceName')->searchable()->toggleable(),
                TextColumn::make('contactName')->searchable()->toggleable(),
                TextColumn::make('contactNumber')->searchable()->toggleable(),
                TextColumn::make('contactEmail')->searchable(),
                TextColumn::make('contactMessage')->searchable(),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
                
            ]);
    }
}
