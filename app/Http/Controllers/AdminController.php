<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Track;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
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

        $tracks = Track::all();
        $users = User::all();
        $usersCount = User::all()->count();
        $tracksCount = Track::all()->count();

        $tracksSize = 0;
        foreach ($tracks as $track) {
            $tracksSize += Storage::disk('public')->size($track->path);
        }
        $tracksSize = number_format($tracksSize / 1000000, 2, ',');

        $now = CarbonImmutable::now();
        $previousWeek = $now->subWeek();
        $firstWeekDay = $previousWeek->startOfWeek();
        $lastWeekDay = $previousWeek->endOfWeek();

        $lastWeekUsers = $users->whereBetween('created_at', [$firstWeekDay, $lastWeekDay])->count();

        $lastWeekTracks = $tracks->whereBetween('created_at', [$firstWeekDay, $lastWeekDay])->count();

        return view('admin.dashboard', compact('usersCount', 'tracksCount', 'tracksSize', 'lastWeekUsers', 'lastWeekTracks'));
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

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->back()->with('success', 'Hai cancellato un genere');
    }
}
