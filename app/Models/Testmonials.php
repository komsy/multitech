<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testmonials extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = [
        'user_id',
        'name',
        'designation',
        'testimonial',
        'testmonialImage',
        'testmonialStatus'
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
