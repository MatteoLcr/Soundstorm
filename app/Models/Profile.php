<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'mobile_number',
        'is_admin',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
