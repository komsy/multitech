<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompanyProfileResource\Pages;
use App\Filament\Admin\Resources\CompanyProfileResource\RelationManagers;
use App\Models\CompanyProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\Wizard;

class CompanyProfileResource extends Resource
{
    protected static ?string $model = CompanyProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Company Information')
                        ->schema([
                        TextInput::make('companyName')
                        ->autocapitalize('words')->required()->maxLength(150),
                        
                        FileUpload::make('companyLogo')->label('Company Image')->image()->enableOpen()
                        ->columns(1)->directory('company')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),),
                        TextInput::make('companyEmail')->prefixIcon('heroicon-m-envelope')->email()->placeholder('info@example.com')->required()->maxLength(50),
                        TextInput::make('phoneNumber')->prefixIcon('heroicon-s-phone-arrow-down-left')->placeholder('+254712345678')
                            ->tel()->required()->maxLength(20),
                        TextInput::make('salesEmail')->prefixIcon('heroicon-m-envelope')->placeholder('info@example.com')->email() 
                            ->maxLength(50)->default(null),
                        TextInput::make('salesNumber')->prefixIcon('heroicon-s-phone-arrow-down-left')->placeholder('+254712345678')->tel()
                            ->maxLength(20)->default(null),
                            TextInput::make('location1')->prefixIcon('heroicon-c-map-pin')->required()->maxLength(255),
                            TextInput::make('location2')->prefixIcon('heroicon-c-map-pin')->maxLength(255)->default(null),
                    ])->columns(2),
                    Wizard\Step::make('Social Medias')
                    ->schema([
                            TextInput::make('facebookProfile')->maxLength(255)->placeholder('https://multitech.co.ke')->url()
                                ->suffixIcon('heroicon-m-globe-alt')->default(null),
                            TextInput::make('instagramProfile')->maxLength(255)->placeholder('https://multitech.co.ke')->url()
                            ->suffixIcon('heroicon-m-globe-alt')->default(null),
                            TextInput::make('twitterProfile')->maxLength(255)->placeholder('https://multitech.co.ke')->url()
                            ->suffixIcon('heroicon-m-globe-alt')->default(null),
                            TextInput::make('youtubeProfile')->maxLength(255)->placeholder('https://multitech.co.ke')->url()
                            ->suffixIcon('heroicon-m-globe-alt')->default(null),
                            TextInput::make('linkedinProfile')->maxLength(255)->placeholder('https://multitech.co.ke')->url()
                            ->suffixIcon('heroicon-m-globe-alt')->default(null),
                            TextInput::make('tiktokProfile')->maxLength(255)->placeholder('https://multitech.co.ke')->url()
                            ->suffixIcon('heroicon-m-globe-alt')->default(null),
                        ])->columns(2)
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('companyName')->label('Company Name')->searchable(),
                TextColumn::make('companyLogo')->label('')->searchable(),
                TextColumn::make('companyEmail')->label('Company Email')->searchable(),
                TextColumn::make('phoneNumber')->searchable(),
                TextColumn::make('salesEmail')->label('Sales Email')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('salesNumber')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('location1')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('location2')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('facebookProfile')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('instagramProfile')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('twitterProfile')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('youtubeProfile')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('linkedinProfile')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('tiktokProfile')->searchable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ImageColumn::make('companyLogo')->label('Company Logo')->circular()->toggleable()->extraImgAttributes(['title' => 'Home Page Image']),
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
            'index' => Pages\ListCompanyProfiles::route('/'),
            'create' => Pages\CreateCompanyProfile::route('/create'),
            'edit' => Pages\EditCompanyProfile::route('/{record}/edit'),
        ];
    }
}
