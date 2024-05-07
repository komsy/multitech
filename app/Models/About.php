<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory,SoftDeletes;
        
    public $fillable = [
        'user_id',
        'aboutHeading1',
        'aboutHeading2',
        'aboutDescription',
        'aboutText1',
        'aboutText2',
        'aboutIcon1',
        'aboutIcon2',
        'aboutPoint1',
        'aboutPoint2',
        'aboutPoint3',
        'aboutPoint4',
        'aboutImage1',
        'aboutImage2',
        'aboutImage3',
        'aboutImage4',
        'aboutStatus',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
