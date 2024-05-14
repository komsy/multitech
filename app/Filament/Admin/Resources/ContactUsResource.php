<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactUsResource\Pages;
use App\Filament\Admin\Resources\ContactUsResource\RelationManagers;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $recordTitleAttribute = 'subHeading';

    protected static ?string $slug = 'contact_us'; //url
 
    protected static ?string $navigationLabel = 'Contact Us'; //sidebar
    protected static ?string $modelLabel = 'Contact Form'; //navname
    // protected static?int $navigationSort= 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('header')
                            ->required()->maxLength(50),
                        TextInput::make('subHeading')
                            ->required()->maxLength(100),
                        Textarea::make('text')
                            ->required()->columnSpanFull(),
                        Textarea::make('map')
                            ->required()->columnSpanFull(),
                        Hidden::make('user_id')->default(auth()->id()),
                    ])->columns(2)
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('header')->searchable(),
                TextColumn::make('subHeading')->searchable()->html()->words(5),
                TextColumn::make('text')->searchable()->html()->words(5),
                TextColumn::make('map')->searchable()->toggleable()->toggledHiddenByDefault(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactUs::route('/'),
            // 'create' => Pages\CreateContactUs::route('/create'),
            // 'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }
}
