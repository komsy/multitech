<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsForm extends Model
{
    use HasFactory;

    public $fillable = [
        'service_id',
        'contactName',
        'contactNumber',
        'contactEmail',
        'contactMessage'
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
