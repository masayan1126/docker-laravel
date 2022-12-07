<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{

    public function create($post_id)
    {
        // dd($post_id);
        return view("comments/commentCreate", ["post_id" => $post_id]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "comment_text" => ["required", "string"],
        ]);

        $comment = new Comment();
        // 左辺:テーブル、右辺が送られてきた値(fromから送られてきたnameが入っている)
        // モデルインスタンス->カラム名 = $request->name;
        $comment->comment_text = $request->comment_text;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id(); //ログイン中のユーザーのidを返す。

        $comment->save();  //save()メソッド：上記の内容をDBに保存

        // dd($comment->id);
        return redirect()->route("posts.show", $request->post_id); //showページへリダイレクト

    }

}

?>