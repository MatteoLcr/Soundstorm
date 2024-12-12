<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like($track_id){
        $userId = Auth::id();
        $exists = Like::where('user_id', $userId)->where('track_id', $track_id)->first();
        if ($exists) {
            $exists->like = !$exists->like;
            $exists->save();
        } else {
            Like::create([
                'user_id' => $userId,
                'track_id' => $track_id,
                'like' => 1
            ]);
        }
        return redirect()->back();
    }
    
}
