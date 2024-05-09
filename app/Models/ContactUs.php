<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
   use HasFactory,SoftDeletes;
        
    public $fillable = [
        'user_id',
        'header',
        'subHeading',
        'text',
        'map'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}