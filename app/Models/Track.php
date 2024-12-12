<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Genre;
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
        return $this->belongsToMany(Genre::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
}
