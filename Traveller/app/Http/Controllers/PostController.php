<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts/post', compact('posts'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $filename = Str::random(20) . '.' . pathinfo($request['image_1']->getClientOriginalName(), PATHINFO_EXTENSION);
        request()->file('image_1')->storeAs('public/images/country_img', $filename);
        // $img_at = request()->file('image_1')->getClientOriginalName();
        // dd($request->file('image_1'));
        // request()->file('image_1')->storeAs('public/images',$img_at);

        // dd($request);
        $post = new Post;
        $post -> country_name = $request -> country_name;
        $post -> caption = $request -> caption;
        $post -> image_1 = $filename;
        $post -> user_id = Auth::id();

        $post -> save();

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        // dd($id);
        $post = Post::find($id);

        return view('posts/show', compact('post'));
    }

    public function edit($id)
    {
        // editページの編集が終わったらddで確認
        $post = Post::find($id);
        return view('posts/edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        dd($request->image_1);

        $post -> country_name = $request -> country_name;
        $post -> caption = $request -> caption;
        $post -> image_1 = $request -> image_1;
        // dd($post);

        $post -> save();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();

        return redirect()->route('posts.index');
    }
}
