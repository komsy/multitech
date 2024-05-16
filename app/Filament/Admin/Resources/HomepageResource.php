<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HomepageResource\Pages;
use App\Filament\Admin\Resources\HomepageResource\RelationManagers;
use App\Models\Homepage;
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
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Contracts\HasTable;

class HomepageResource extends Resource
{
    protected static ?string $model = Homepage::class;

    protected static ?string $navigationIcon = 'heroicon-s-home';
    protected static ?string $recordTitleAttribute = 'header1';

    protected static ?string $slug = 'home'; //url
 
    protected static ?string $navigationLabel = 'Homepage'; //sidebar
    protected static ?string $modelLabel = 'Banner'; //navname
    // protected static?int $navigationSort= 3;
    protected static?string $navigationGroup= 'Page Setting';

    public static function form(Form $form): Form
    { 
        return $form
            ->schema([
                Section::make('Home Page')
                    ->description('Set what to display on the page Banner')
                    ->icon('heroicon-s-home')
                    ->columns(2)->compact()
                    ->schema([
                        TextInput::make('header1')->label('Banner Heading')->required()->maxLength(100),
                        TextInput::make('header2')->label('Banner Sub-heading')->required()->maxLength(150), 
                        FileUpload::make('homepageImage1')->label('Carousel Images')->image()->enableOpen()
                        ->columns(1)->directory('homepageImages')->required()
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),),
                        FileUpload::make('homepageImage2')->label('Carousel Images')->image()->enableOpen()
                        ->columns(1)->directory('homepageImages')->required()
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),),
                        ])->collapsible(),

                Section::make('Text setting')
                    ->description('Set the text to display on specific sections of the Home page')
                    ->icon('heroicon-s-document-text')
                    ->columns(3)->compact()
                    ->schema([
                        TextInput::make('whyChooseUsHeader1')->label('Why Choose Us H1')->required()->maxLength(50),
                        TextInput::make('whyChooseUsHeader2')->label('Why Choose Us H2')->required()->maxLength(150),
                        TextInput::make('serviceHeader1')->label('Service H1')->required()->maxLength(50),
                        TextInput::make('serviceHeader2')->label('Service H2')->required() ->maxLength(150),
                        TextInput::make('projectHeader1')->label('Project H1')->required()->maxLength(50),
                        TextInput::make('projectHeader2')->label('Project H2')->required()->maxLength(150),
                        TextInput::make('testimonialHeader1')->label('Testimonial H1')->required()->maxLength(50),
                        TextInput::make('testimonialHeader2')->label('Testimonial H2')->required()->maxLength(150),
                        ])->collapsed(),

                Section::make('Visibility')
                    ->description('Show/Hide specific pages on Home page')
                    ->icon('heroicon-s-eye')
                    ->columns(2)->compact()
                    ->schema([
                        Toggle::make('topbarShow')->label('Topbar')->required()->default(true),
                        Toggle::make('factShow')->label('Fact')->required()->default(true),
                        Toggle::make('factPageShow')->label('Facts Page')->required()->default(true),
                        Toggle::make('projectShow')->label('Project')->required()->default(true),
                        Toggle::make('whyChooseUsShow')->label('Why Choose Us')->required()->default(true),
                        Toggle::make('testmonyShow')->label('Testmony')->required()->default(true),
                        Toggle::make('newsletterShow')->label('News Letter')->required()->default(true),
                ])->collapsed(),
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
                TextColumn::make('user.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('header1')->label('Banner Heading')->searchable(),
                TextColumn::make('header2')->label('Banner Sub-heading')->searchable(),
                TextColumn::make('whyChooseUsHeader1')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('whyChooseUsHeader2')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('serviceHeader1')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('serviceHeader2')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('projectHeader1')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('projectHeader2')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('testimonialHeader1')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('testimonialHeader2')->searchable()->toggleable()->toggledHiddenByDefault(),
                BooleanColumn::make('topbarShow')->label('Topbar Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                BooleanColumn::make('factShow')->label('Facts Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                BooleanColumn::make('factPageShow')->label('Facts Page Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                BooleanColumn::make('projectShow')->label('Project Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                BooleanColumn::make('whyChooseUsShow')->label('Why Choose Us Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                BooleanColumn::make('testmonyShow')->label('Testmonial Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                BooleanColumn::make('newsletterShow')->label('News letter Is Active')->toggleable()->toggledHiddenByDefault()->toggle(),
                Tables\Columns\ImageColumn::make('homepageImage1')->label('Homepage Image')->circular()->toggleable()->extraImgAttributes(['title' => 'Home Page Image']),
                Tables\Columns\ImageColumn::make('homepageImage2')->label('Homepage Image')->circular()->toggleable()->extraImgAttributes(['title' => 'Home Page Image']),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('updated_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
    
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomepages::route('/'),
            'create' => Pages\CreateHomepage::route('/create'),
            'edit' => Pages\EditHomepage::route('/{record}/edit'),
        ];
    }
}
