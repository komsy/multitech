<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerFollowUp extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = [
        'user_id',
        'contact_us_form_id',
        'customerNeed',
        'remarks',
        'reminder',
        'status'
    ];

    public function contactUsForm()
    {
        return $this->belongsTo(ContactUsForm::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
