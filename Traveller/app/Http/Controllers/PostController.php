<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('post', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $post = new Post;
        $post -> country_name = $request -> create_country;
        $post -> caption = $request -> create_caption;
        $post -> image_1 = $request -> create_image;
        $post -> user_id = Auth::id();

        $post -> save();

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        // viewのページ直したらdd使って確認してみる
        $post = Post::find($id);

        return view('show', compact('post'));
    }

    public function edit($id)
    {
        // editページの編集が終わったらddで確認
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post -> country_name = $request -> create_country;
        $post -> caption = $request -> create_caption;
        $post -> image_1 = $request -> create_image;

        $post -> save();

        return view('show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();

        return redirect()->route('post.index');
    }
}
