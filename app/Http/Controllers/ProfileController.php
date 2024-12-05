<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function page() {
        $user = auth()->user();
        return view('profile.page', compact('user'));
    }

    public function setAvatar(Request $request, User $user) 
    {
        $request->validate([
            'avatar' => 'image',
        ]);

        $user->profile->update([
            'avatar' => $request->file('avatar')->store('/public/avatars'),
        ]);

        return redirect()->back()-with('success', 'Avatar aggiornato con successo');
    }
}
