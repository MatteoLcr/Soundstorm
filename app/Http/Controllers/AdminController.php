<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Foundation\Configuration\Middleware;


class AdminController extends Controller
{
    // public static function middleware()
    // {
    //     return [
    //         new Middleware('auth'),
    //     ];
    // }

    public function __construct()
    {
        $this->middleware('auth'); // Applica il middleware 'auth' a tutte le azioni del controller
    }

    public function dashboard()
    {
        if (!auth()->user()->isAdmin()) {
            abort(403, 'non autorizzato');
        }
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function users()
    {

        if (!auth()->user()->isAdmin()) {
            abort(403, 'Non autorizzato');
        }
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function tracks()
    {

        if (!auth()->user()->isAdmin()) {
            abort(403, 'Non autorizzato');
        }
        $tracks = Track::all();
        return view('admin.tracks', compact('tracks'));
    }

    public function genres()
    {

        if (!auth()->user()->isAdmin()) {
            abort(403, 'Non autorizzato');
        }
        $genres = Genre::all();
        return view('admin.genres', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Genre::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Hai creato un nuovo genere');
    }

    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $genre->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Hai aggiornato un genere');
    }

    public function destroy(Genre $genre){
        $genre->delete();
        return redirect()->back()->with('success', 'Hai cancellato un genere');
    }
}
