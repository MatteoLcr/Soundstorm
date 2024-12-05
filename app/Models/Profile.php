<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'avatar', 
        'address',
        'city',
        'province',
        'region',
        'country',
        'zip_code',
        'mobile_number'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
