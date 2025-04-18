<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory,SoftDeletes;
    
    public $fillable = [
        'user_id',
        'serviceName',
        'serviceHeading',
        'serviceImage',
        'serviceDescription',
        'serviceStatus',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
