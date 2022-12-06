<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        $posts = Post::where('user_id', Auth::id())->paginate(5);
        // echo $posts;
        return view('users.mypage', ['posts'=>$posts]);
    }
}
