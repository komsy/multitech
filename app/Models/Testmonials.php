<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testmonials extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = [
        // 'team_id',
        'name',
        'designation',
        'testimonial',
        'testmonialImage',
        'testmonialStatus'
    ];

 
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
