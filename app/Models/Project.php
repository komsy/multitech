<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory,SoftDeletes;
    
    public $fillable = [
        'user_id',
        'projectName',
        'heading',
        'description',
        'projectImage',
        'projectStatus',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
