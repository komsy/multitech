<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactUsFormResource\Pages;
use App\Filament\Admin\Resources\ContactUsFormResource\RelationManagers\CustomerFollowUpRelationManager;
use App\Filament\Admin\Resources\ContactUsFormResource\RelationManagers;
use App\Models\ContactUsForm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\Textarea;

class ContactUsFormResource extends Resource
{
    protected static ?string $model = ContactUsForm::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected ?string $subheading = 'Contact Us Form Inquiry';
    
    protected static ?string $recordTitleAttribute = 'contactName';

    protected static ?string $slug = 'customerInquiry'; //url
 
    protected static ?string $navigationLabel = 'Customer Inquiry'; //sidebar
    protected static ?string $modelLabel = 'Customer Inquiry'; //navname
    // protected static?int $navigationSort= 3;
    protected static ?string $navigationGroup = 'Reports';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make('customerFollowUp')
                    ->label('Customer Follow Up Details')
                    ->schema([
                        Select::make('service_id')->required()->columnSpan(['md'=>4])
                            ->relationship('service', 'serviceName')->disabled(),
                        TextInput::make('contactName')->required()->maxLength(150)->readonly()->columnSpan(['md'=>4]),
                        TextInput::make('contactNumber')->required()->maxLength(20)->readonly()->columnSpan(['md'=>4]),
                        TextInput::make('contactEmail')->required()->maxLength(30)->readonly()->columnSpan(['md'=>4]),
                        Textarea::make('contactMessage')->required()->columnSpanFull()->readonly()->columnSpan(['md'=>6]),
                    ])
                    ->columns(['md'=>12])
                    ->columnSpan('full'),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                TextColumn::make('service.serviceName')->sortable()->searchable(),
                TextColumn::make('contactName')->searchable(),
                TextColumn::make('contactNumber')->searchable(),
                TextColumn::make('contactEmail')->searchable(),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable(),
                TextColumn::make('updated_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            CustomerFollowUpRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactUsForms::route('/'),
            // 'create' => Pages\CreateContactUsForm::route('/create'),
            'edit' => Pages\EditContactUsForm::route('/{record}/edit'),
        ];
    }
}
