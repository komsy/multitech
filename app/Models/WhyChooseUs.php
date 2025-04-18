<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Contracts\HasTenants;
use Illuminate\Database\Eloquent\SoftDeletes;
use Filament\Panel;
use App\Models\Team;

class WhyChooseUs extends Model //  implements  HasTenants
{
    use HasFactory,SoftDeletes;

    public $fillable = [
        'user_id',
        'icon',
        'heading',
        'text'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
}
