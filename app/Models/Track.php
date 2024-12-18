<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Scout\Searchable;

class Track extends Model
{

    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'cover',
        'description',
        'path',
        'user_id',
    ];

    public function toSearchableArray() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'user' => $this->user,
            'genre' => $this->genre
        ];
    }

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
