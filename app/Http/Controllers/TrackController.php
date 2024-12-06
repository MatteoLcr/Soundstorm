<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TrackController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['index'])
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('track.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'cover' => ['required', 'image'],
            'description' => ['required'],
            'path' => 'required|file|mimes:mp3,wav,aac',
        ]);

        Track::create([
            'title' => $request->title,
            'cover' => $request->file('cover')->store('/public/covers'),
            'description' => $request->description,
            'path' => $request->file('path')->store('/public/tracks'),
            'user_id' => Auth::user()->id
        ]);
        return redirect(route('welcome'))->with('success', 'Hai aggiunto correttamente il tuo brano');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }
}
