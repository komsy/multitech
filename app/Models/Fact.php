<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fact extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = [
        'user_id',
        'icon',
        'heading',
        'number',
        'factStatus',
        'factPageShow'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
