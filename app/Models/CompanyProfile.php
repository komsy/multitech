<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyProfile extends Model
{
    use HasFactory,SoftDeletes;
        
    public $fillable = [
        'user_id',
        'companyName',
        'companyLogo',
        'companyEmail',
        'salesEmail',
        'phoneNumber',
        'salesNumber',
        'location1',
        'location2',
        'facebookProfile',
        'instagramProfile',
        'twitterProfile',
        'youtubeProfile',
        'linkedinProfile',
        'tiktokProfile',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}