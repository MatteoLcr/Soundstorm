<?php

namespace App\Models;

use App\Models\User;
use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id', 
        'track_id',
        'like'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    } public function track() {
        return $this->belongsTo(Track::class);
    }
}

