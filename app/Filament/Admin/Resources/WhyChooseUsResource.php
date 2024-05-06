<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\WhyChooseUsResource\Pages;
use App\Filament\Admin\Resources\WhyChooseUsResource\RelationManagers;
use App\Models\WhyChooseUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class WhyChooseUsResource extends Resource
{
    protected static ?string $model = WhyChooseUs::class;
    protected static ?string $recordTitleAttribute = 'heading';

    protected static ?string $slug = 'whychooseus'; //url
 
    protected static ?string $navigationLabel = 'Why Choose Us'; //sidebar
    protected static ?string $modelLabel = 'whychooseus'; //navname
    // protected static?int $navigationSort= 3;
    protected static?string $navigationGroup= 'Website Setting';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('icon')->label('Product Image')->image()->enableOpen()
                    ->columns(1)->directory('testmonyImages')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend(now()->timestamp),
                    ),
                TextInput::make('heading')
                    ->required()->maxLength(100),
                RichEditor::make('text'),
                // TextInput::make('text')
                //     ->required()->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('heading')->searchable(),
                TextColumn::make('text')->searchable()->html()->words(7),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable(),
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
            'index' => Pages\ListWhyChooseUs::route('/'),
            // 'create' => Pages\CreateWhyChooseUs::route('/create'),
            // 'edit' => Pages\EditWhyChooseUs::route('/{record}/edit'),
        ];
    }
}
