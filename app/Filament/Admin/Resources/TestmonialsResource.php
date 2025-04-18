<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TestmonialsResource\Pages;
use App\Filament\Admin\Resources\TestmonialsResource\RelationManagers;
use App\Models\Testmonials;
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
use Filament\Tables\Contracts\HasTable;

class TestmonialsResource extends Resource
{
    protected static ?string $model = Testmonials::class;

    protected static ?string $navigationIcon = 'heroicon-s-microphone';
    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $slug = 'testimonial'; //url
 
    protected static ?string $navigationLabel = 'Testimonials'; //sidebar
    protected static ?string $modelLabel = 'Testimonial'; //navname
    // protected static?int $navigationSort= 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(55),
                    TextInput::make('designation')
                        ->maxLength(55)->default(null),
                    FileUpload::make('testmonialImage')->label('Client Image')->image()->enableOpen()
                        ->columns(1)->directory('testmonyImages')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),
                        ),
                    RichEditor::make('testimonial')->required(),
                    // TextInput::make('testimonial')
                    //     ->required()->maxLength(255),
                    Toggle::make('testmonialStatus')->required()->default(true),
                ])
                ->columns(2)
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
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ImageColumn::make('testmonialImage')->label('Image')->circular()->toggleable()->extraImgAttributes(['title' => 'Testmonial Image']),
                TextColumn::make('name')->searchable(),TextColumn::make('designation')->searchable(),
                TextColumn::make('testimonial')->searchable()->label('Testimony')->html()->words(7),
                Tables\Columns\BooleanColumn::make('testmonialStatus')->label('Is Active')->toggleable()->toggle(),
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
            'index' => Pages\ListTestmonials::route('/'),
            //'create' => Pages\CreateTestmonials::route('/create'),
            //'edit' => Pages\EditTestmonials::route('/{record}/edit'),
        ];
    }
}
