<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Filament\Admin\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
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

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-s-ellipsis-horizontal-circle';
    protected static ?string $recordTitleAttribute = 'projectName';

    protected static ?string $slug = 'project'; //url
 
    protected static ?string $navigationLabel = 'Projects'; //sidebar
    protected static ?string $modelLabel = 'Project'; //navname
    // protected static?int $navigationSort= 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                    TextInput::make('projectName')
                        ->required()->maxLength(50),
                    TextInput::make('heading')
                        ->maxLength(50)->default(null),
                    FileUpload::make('projectImage')->label('Project Image')->image()->enableOpen()
                        ->columns(1)->directory('projectImages')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(now()->timestamp),
                        ),
                    RichEditor::make('description'),
                    Toggle::make('projectStatus')->required()->default(true),
                ])
                ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('projectName')->searchable(),
                TextColumn::make('heading')->searchable(),
                TextColumn::make('description')->searchable()->label('Project Desc')->html()->words(5),
                Tables\Columns\ImageColumn::make('projectImage')->label('Image')->circular()->toggleable()->extraImgAttributes(['title' => 'Testmonial Image']),
                Tables\Columns\BooleanColumn::make('projectStatus')->label('Is Active')->toggleable()->toggle(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
