<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProfileController extends Controller implements HasMiddleware
{
    public static function middleware() {
        return [
            'auth'
        ];
    }
    public function page() {
        $likes = auth()->user()->likes;
        $user = auth()->user();
        return view('profile.page', compact('user', 'likes'));
    }



    public function setAvatar(Request $request, User $user){
        $request->validate([
            'avatar' => 'image',
        ]);
        $user->profile()->update([
            'avatar' => $request->file('avatar')->store('avatars', 'public')
        ]);
        return redirect()->back()->with('success', 'Avatar aggiornato');
    }

    public function edit(User $user) {
    return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'], 
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)]
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->profile()->update([
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'region' => $request->region,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'mobile_number' => $request->mobile_number,
        ]);

        return redirect(route('profilo.page'))->with('success', 'Profilo aggiornato con successo');
    }
}