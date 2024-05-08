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

class HomepageResource extends Resource
{
    protected static ?string $model = Homepage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('header1')->required()->maxLength(100),
                TextInput::make('header2')->required()->maxLength(150), 
                FileUpload::make('homepageImage')->label('Carousel Images')->image()->enableOpen()
                ->columns(1)->directory('homepageImages')
                ->getUploadedFileNameForStorageUsing(
                    fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                        ->prepend(now()->timestamp),
                ),

                TextInput::make('whyChooseUsHeader1')->label('Why Choose Us H1')->required()->maxLength(50),
                TextInput::make('whyChooseUsHeader2')->label('Why Choose Us H2')->required()->maxLength(150),
                TextInput::make('serviceHeader1')->label('Service H1')->required()->maxLength(50),
                TextInput::make('serviceHeader2')->label('Service H2')->required() ->maxLength(150),
                TextInput::make('projectHeader1')->label('Project H1')->required()->maxLength(50),
                TextInput::make('projectHeader2')->label('Project H2')->required()->maxLength(150),
                TextInput::make('testimonialHeader1')->label('Testimonial H1')->required()->maxLength(50),
                TextInput::make('testimonialHeader2')->label('Testimonial H2')->required()->maxLength(150),
                
               
                Toggle::make('topbarShow')->label('Topbar')->required()->default(true),
                Toggle::make('factShow')->label('Fact')->required()->default(true),
                Toggle::make('factPageShow')->label('Facts Page')->required()->default(true),
                Toggle::make('projectShow')->label('Project')->required()->default(true),
                Toggle::make('whyChooseUsShow')->label('Why Choose Us')->required()->default(true),
                Toggle::make('testmonyShow')->label('Testmony')->required()->default(true),
                Toggle::make('newsletterShow')->label('News Letter')->required()->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('header1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('header2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whyChooseUsHeader1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whyChooseUsHeader2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serviceHeader1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serviceHeader2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('projectHeader1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('projectHeader2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('testimonialHeader1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('testimonialHeader2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('topbarShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('factShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('factPageShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('projectShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('whyChooseUsShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('testmonyShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('newsletterShow')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListHomepages::route('/'),
            'create' => Pages\CreateHomepage::route('/create'),
            'edit' => Pages\EditHomepage::route('/{record}/edit'),
        ];
    }
}
