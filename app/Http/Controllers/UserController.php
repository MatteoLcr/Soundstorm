<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Genre $genres)
    {
        $genres=Genre::all();
        $genresTracks = Genre::with('tracks')->get();

        return view( 'users.index', compact('genres','genresTracks'));
    } 
}
