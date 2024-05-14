<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homepage extends Model
{
    use HasFactory,SoftDeletes;
    
    public $fillable = [
        'user_id',
        'header1',
        'header2',
        'homepageImage1',
        'homepageImage2',
        'whyChooseUsHeader1',
        'whyChooseUsHeader2',
        'serviceHeader1',
        'serviceHeader2',
        'projectHeader1',
        'projectHeader2',
        'testimonialHeader1',
        'testimonialHeader2',
        'topbarShow',
        'factShow',
        'factPageShow',
        'projectShow',
        'whyChooseUsShow',
        'testmonyShow',
        'newsletterShow',
    ];

    // protected $casts = [
    //     'homepageImage' => 'array'
    // ];  


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}