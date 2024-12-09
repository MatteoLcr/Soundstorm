<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'title',
        'cover',
        'description',
        'path',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function genres() {
        return $this->belongsToMany(genre::class);
    }
}
