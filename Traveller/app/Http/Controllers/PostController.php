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
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts/post', compact('posts'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $filename1 = Str::random(20) . '.' . pathinfo($request['image_1']->getClientOriginalName(), PATHINFO_EXTENSION);
        request()->file('image_1')->storeAs('public/images/country_img', $filename1);
        $filename2 = Str::random(20) . '.' . pathinfo($request['image_1']->getClientOriginalName(), PATHINFO_EXTENSION);
        request()->file('image_1')->storeAs('public/images/country_img', $filename2);
        $filename3 = Str::random(20) . '.' . pathinfo($request['image_1']->getClientOriginalName(), PATHINFO_EXTENSION);
        request()->file('image_1')->storeAs('public/images/country_img', $filename3);
        $filename4 = Str::random(20) . '.' . pathinfo($request['image_1']->getClientOriginalName(), PATHINFO_EXTENSION);
        request()->file('image_1')->storeAs('public/images/country_img', $filename4);
        $filename5 = Str::random(20) . '.' . pathinfo($request['image_1']->getClientOriginalName(), PATHINFO_EXTENSION);
        request()->file('image_1')->storeAs('public/images/country_img', $filename5);
        // $img_at = request()->file('image_1')->getClientOriginalName();
        // dd($request->file('image_1'));
        // request()->file('image_1')->storeAs('public/images',$img_at);

        // dd($request);
        $post = new Post;
        $post -> country_name = $request -> country_name;
        $post -> caption = $request -> caption;
        $post -> image_1 = $filename1;
        $post -> image_2 = $filename2;
        $post -> image_3 = $filename3;
        $post -> image_4 = $filename4;
        $post -> image_5 = $filename5;
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
        // dd($request->image_1);

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
