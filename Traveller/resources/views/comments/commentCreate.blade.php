@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/edit.css') }}"> --}}
    <head>
        <link href="{{ asset('css/commentCreate.css') }}" rel="stylesheet" >
    </head>
@section('content')

<main>
    <div class="edit-allpage">
        <form action="{{ route("comments.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
        {{-- コメントtopic --}}
            <div class="comment-topic">
                <div class="write-comment-create">
                    <p class="write-comment">leave a comment</p>
                </div>
            </div>
            <input type="hidden" name="post_id" value="{{ $post_id }}" >
        {{-- コメントテキスト--}}
            <div class="comment-box">
                <div class="comment-create-text">
                    <textarea name="comment_text" id="text-comment" cols="30" rows="10" placeholder="write here"></textarea>
                </div>
            </div>

        {{-- コメントボタン --}}
            <div class="comment-button">
                <img class="comment-icon" src="/images/comment-icon.png" alt="">
                <button class="comment-now-btn" type="submit">Comment Now</button>
            </div>
        </form>
    </div>

</main>
    
@endsection