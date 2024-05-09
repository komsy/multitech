<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ServiceResource\Pages;
use App\Filament\Admin\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\Card;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-c-server-stack';
    protected static ?string $recordTitleAttribute = 'serviceName';

    protected static ?string $slug = 'service'; //url
 
    protected static ?string $navigationLabel = 'Services'; //sidebar
    protected static ?string $modelLabel = 'Service'; //navname
    // protected static?int $navigationSort= 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                    TextInput::make('serviceName')
                        ->required()->maxLength(50),
                    TextInput::make('serviceHeading')
                        ->maxLength(50)->default(null),
                    FileUpload::make('serviceImage')->label('Project Image')->image()->enableOpen()
                        ->columns(1)->directory('serviceImages')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),
                        ),
                    RichEditor::make('serviceDescription'),
                    Toggle::make('serviceStatus')->required()->default(true),
                ])
                ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('serviceName')->searchable(),
                TextColumn::make('serviceHeading')->searchable(),
                TextColumn::make('serviceDescription')->label('Service Desc')->searchable()->html()->words(5),
                Tables\Columns\ImageColumn::make('serviceImage')->label('Image')->circular()->toggleable()->extraImgAttributes(['title' => 'Testmonial Image']),
                Tables\Columns\BooleanColumn::make('serviceStatus')->label('Is Active')->toggleable()->toggle(),
                TextColumn::make('created_at')->dateTime('d-M-Y')->toggleable()->toggledHiddenByDefault(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
