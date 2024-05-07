<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AboutResource\Pages;
use App\Filament\Admin\Resources\AboutResource\RelationManagers;
use App\Models\About;
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
use Filament\Forms\Components\Textarea;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([Tabs::make('Tabs')
            ->tabs([
                Tabs\Tab::make('Basic Texts')
                ->icon('heroicon-s-document-text')
                    ->schema([
                        TextInput::make('aboutHeading1')->required()->maxLength(100),
                        TextInput::make('aboutHeading2')->required()->maxLength(150),
                        Textarea::make('aboutDescription') ->autosize(),
                        TextInput::make('aboutText1')->required()->maxLength(150),
                        TextInput::make('aboutText2')->required()->maxLength(150),
                        TextInput::make('aboutPoint1')->required()->maxLength(150),
                        TextInput::make('aboutPoint2')->required()->maxLength(150),
                        TextInput::make('aboutPoint3')->required()->maxLength(150),
                        TextInput::make('aboutPoint4')->required()->maxLength(150),
                        ])->columns(3),
                Tabs\Tab::make('About Icons')
                ->icon('heroicon-s-rectangle-group')
                    ->schema([
                        FileUpload::make('aboutIcon1')->label('About Icon 1')->image()->enableOpen()
                            ->columns(1)->directory('aboutImages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(now()->timestamp),
                            ),
                        FileUpload::make('aboutIcon2')->label('About Icon 2')->image()->enableOpen()
                            ->columns(1)->directory('aboutImages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(now()->timestamp),
                            ),
                        ])->columns(2),
                Tabs\Tab::make('About Images')
                ->icon('heroicon-s-computer-desktop')
                    ->schema([
                        FileUpload::make('aboutImage1')->label('About Image 1')->image()->enableOpen()
                            ->columns(1)->directory('aboutImages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(now()->timestamp),
                            ),
                        FileUpload::make('aboutImage2')->label('About Image 2')->image()->enableOpen()
                            ->columns(1)->directory('aboutImages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(now()->timestamp),
                            ),
                        FileUpload::make('aboutImage3')->label('About Image 3')->image()->enableOpen()
                            ->columns(1)->directory('aboutImages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(now()->timestamp),
                            ),
                        FileUpload::make('aboutImage4')->label('About Image 4')->image()->enableOpen()
                            ->columns(1)->directory('aboutImages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(now()->timestamp),
                            ),
                        Toggle::make('aboutStatus')->required()->default(true),
                    ])->columns(2),
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('aboutHeading1')->label('Heading 1')->searchable()->words(3),
                TextColumn::make('aboutHeading2')->label('Heading 2')->searchable()->words(3),
                TextColumn::make('aboutText1')->label('Point 1')->searchable()->words(5),
                TextColumn::make('aboutText2')->label('Point 2')->searchable()->words(5),
                TextColumn::make('aboutPoint1')->label('Point 1')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('aboutPoint2')->label('Point 2')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('aboutPoint3')->label('Point 3')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('aboutPoint4')->label('Point 4')->searchable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ImageColumn::make('aboutIcon1')->label('Icon 1')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'About Icon 1']),
                Tables\Columns\ImageColumn::make('aboutIcon2')->label('Icon 2')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'About Icon 2']),
                TextColumn::make('aboutDescription')->searchable()->label('Desc')->html()->words(5),
                Tables\Columns\ImageColumn::make('aboutImage1')->label('Image 1')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'About Image 1']),
                Tables\Columns\ImageColumn::make('aboutImage2')->label('Image 2')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'About Image 2']),
                Tables\Columns\ImageColumn::make('aboutImage3')->label('Image 3')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'About Image 3']),
                Tables\Columns\ImageColumn::make('aboutImage4')->label('Image 4')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'About Image 4']),
                Tables\Columns\BooleanColumn::make('aboutStatus')->label('Is Active')->toggleable()->toggle(),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('updated_at')
                ->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
