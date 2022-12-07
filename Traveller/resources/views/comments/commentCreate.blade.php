@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/edit.css') }}"> --}}
    <head>
        <link href="{{ asset('css/commentCreate.css') }}" rel="stylesheet" >
    </head>
@section('content')

<main>
    <div class="edit-allpage">
        <form action=" " method="POST" enctype="multipart/form-data">
        @csrf

        {{-- コメントtopic --}}
        <section class="comment-topic">
            <div class="write-comment-create">
                <p class="write-comment">leave a comment</p>
        </section>

        {{-- コメントテキスト--}}
        <section class="comment-box">
            <div class="comment-create-text">
                <textarea name="text-comment" id="text-comment" cols="30" rows="10" placeholder="write here"></textarea>
            </div>
        </section>

        {{-- コメントボタン --}}
        <div class="comment-button">
            <img class="comment-icon" src="images/comment-icon.png" alt="">
            <button class="comment">Comment</button>
        </div>
        </form>
    </div>
</main>
    
@endsection