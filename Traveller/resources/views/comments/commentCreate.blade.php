@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/edit.css') }}"> --}}
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

        {{-- コメントテキスト--}}
            <div class="comment-box">
                <div class="comment-create-text">
                    <textarea name="comment_text" id="text-comment" cols="30" rows="10" placeholder="write here"></textarea>
                </div>
            </div>

        {{-- コメントボタン --}}
            <div class="comment-button">
                <img class="comment-icon" src="images/comment-icon.png" alt="">
                <button type="submit">Comment Now</button>
            </div>
        </form>
    </div>

</main>
    
@endsection