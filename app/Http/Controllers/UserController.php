<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $users, Track $tracks, Genre $genres)
    {
        $users = User::all();
        $tracks = Track::all();
        $genres = Genre::all();
        return view('users.index', compact('users', 'tracks', 'genres'));
    }   
}
