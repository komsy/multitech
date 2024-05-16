<?php

namespace App\Filament\Admin\Resources\ContactUsFormResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Contracts\HasTable;

class CustomerFollowUpRelationManager extends RelationManager
{
    protected static string $relationship = 'customerFollowUp';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('customerNeed') ->autosize(),
                Textarea::make('remarks') ->autosize(),
                DatePicker::make('reminder')->native(false),
                Hidden::make('user_id')->default(auth()->id()),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('contact_us_form_id')
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
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('customerNeed')->searchable()->words(3),
                TextColumn::make('remarks')->searchable()->words(3),
                TextColumn::make('reminder')->dateTime('d-M-Y')->toggleable(),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable(),
                TextColumn::make('updated_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }
}
