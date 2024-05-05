<?php
namespace App\Filament\Pages\App\Tenancy;
 
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register team';
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }
                    
                        $set('slug', Str::slug($state));
                    }),
                    
                TextInput::make('slug')
            ]);
    }
    
    protected function handleRegistration(array $data): Team
    {
        $team = Team::create($data);
        
        $team->members()->attach(auth()->user());
        
        return $team;
    }
}