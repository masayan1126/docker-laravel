<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $like = new Like();
        $like->post_id = $request->post_id;
        $like->user_id = Auth::user()->id;
        $like->save();

        return back();
    }

    public function destroy(Request $request)
    {
        $like = Like::find($request->like_id);
        // echo $like;
        $like->delete();
        return back();
    }
}
