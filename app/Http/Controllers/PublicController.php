<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function homepage()
    {
        $tracks =  $tracks = Track::orderBy('created_at', 'desc')->take(8)->get();
        return view('welcome', compact('tracks'));
    }
}
