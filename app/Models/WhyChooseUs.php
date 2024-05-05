<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use App\Models\Team;

class WhyChooseUs extends Model //  implements  HasTenants
{
    use HasFactory;

    public $fillable = [
        'team_id',
        'icon',
        'heading',
        'text'
    ];

 
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
}
