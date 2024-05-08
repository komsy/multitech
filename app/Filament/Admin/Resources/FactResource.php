<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FactResource\Pages;
use App\Filament\Admin\Resources\FactResource\RelationManagers;
use App\Models\Fact;
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
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;

class FactResource extends Resource
{
    protected static ?string $model = Fact::class;

    protected static ?string $navigationIcon = 'heroicon-m-document-check';
    protected static ?string $recordTitleAttribute = 'heading';

    protected static ?string $slug = 'fact'; //url
 
    protected static ?string $navigationLabel = 'Facts'; //sidebar
    protected static ?string $modelLabel = 'fact'; //navname
    // protected static?int $navigationSort= 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                    FileUpload::make('icon')->label('Icon')->image()->enableOpen()
                        ->columns(1)->directory('Facts')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),
                        ),
                    TextInput::make('heading')->required()->maxLength(100),
                    TextInput::make('number')->required()->numeric(),
                    Hidden::make('user_id')->default(auth()->id()),
                    Toggle::make('factStatus')->required()->default(true),
                ])
                ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ImageColumn::make('icon')->label('Icon')->circular()->toggleable()->extraImgAttributes(['title' => 'Why choose Us Icon']),
                TextColumn::make('heading')->searchable(),
                TextColumn::make('number')->numeric()->searchable(),
                Tables\Columns\BooleanColumn::make('factStatus')->label('Is Active')->toggleable()->toggle(),
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
            'index' => Pages\ListFacts::route('/'),
            // 'create' => Pages\CreateFact::route('/create'),
            // 'edit' => Pages\EditFact::route('/{record}/edit'),
        ];
    }
}
