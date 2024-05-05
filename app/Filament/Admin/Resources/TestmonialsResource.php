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

class TestmonialsResource extends Resource
{
    protected static ?string $model = Testmonials::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(55),
                TextInput::make('designation')
                    ->maxLength(55)->default(null),
                FileUpload::make('testmonialImage')->label('Product Image')->image()
                    ->directory('testmonyImages'),
                RichEditor::make('testimonial')->required(),
                // TextInput::make('testimonial')
                //     ->required()->maxLength(255),
                Toggle::make('testmonialStatus')->required()->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('designation')->searchable(),
                TextColumn::make('testimonial')->searchable(),
                Tables\Columns\ImageColumn::make('testmonialImage')->circular()->toggleable()->toggledHiddenByDefault()->extraImgAttributes(['title' => 'Testmonial Image']),
                Tables\Columns\BooleanColumn::make('testmonialStatus')->label('Is Active')->toggleable()->toggle(),
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
            'index' => Pages\ListTestmonials::route('/'),
            //'create' => Pages\CreateTestmonials::route('/create'),
            //'edit' => Pages\EditTestmonials::route('/{record}/edit'),
        ];
    }
}
