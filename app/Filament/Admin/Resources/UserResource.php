<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Filament\Admin\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Card;
use Filament\Pages\Page;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static?int $navigationSort= 1;
    protected static?string $navigationGroup= 'User Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                    TextInput::make('name')
                        ->required()->unique(ignoreRecord: true)
                        ->maxLength(255),
                    TextInput::make('email')
                        ->email()->unique(ignoreRecord: true)
                        ->required()
                        ->maxLength(255),
                    //DateTimePicker::make('email_verified_at'),
                    TextInput::make('password')
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->dehydrated(fn ($state) => filled($state))
                        ->required(fn (Page $livewire) => ($livewire instanceof CreateUser))
                        ->maxLength(255),
                    //DateTimePicker::make('last_seen'),
                    Select::make('roles')->preload()//->multiple()
                        ->relationship('roles', 'name'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('email_verified_at')
                    ->dateTime('M j, Y')->sortable()->toggleable()->toggledHiddenByDefault(),
                // TextColumn::make('last_seen')
                //     ->dateTime('M j, Y')->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('deleted_at')
                    ->dateTime('M j, Y')->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('created_at')
                    ->dateTime('M j, Y')->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('updated_at')
                    ->dateTime('M j, Y')->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('roles')->label('Role')->getStateUsing(function ($record) {
                    $roles = DB::table('roles')
                        ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                        ->where('model_has_roles.model_type', '=', 'App\Models\User')
                        ->where('model_has_roles.model_id', '=', $record->id)
                        ->select('roles.name')
                        ->get();
                    $rolesString = '';
                    foreach($roles as $role) {
                        $rolesString = $rolesString.' '.$role->name;
                    }
                    return $rolesString;
                })
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
   
    public static function getEloquentQuery():Builder
    {
        return parent::getEloquentQuery()->where('name','!=','Admin');
    }
}
