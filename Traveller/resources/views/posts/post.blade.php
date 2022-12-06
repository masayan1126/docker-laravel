@extends('layouts/app')
<head>
    <link rel="stylesheet" href="{{ asset('/css/post.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
@section('content')
<main>
    @foreach($posts as $post)
    <div class="post-box">
        <div class="post-username-box">
            <p class="post-username">○ User Nmae</p>
        </div>
        <p class="post-countryname">{{ $post->country_name }}</p>
        <a href=""><img src="{{ asset('images/country_img/' . $post->image_1) }}" alt="画像" width="240" height="135"></a>
        <div class="post-commentbox">
            <input type="checkbox" id="post-readmore" class="post-readmore">
            <label for="post-readmore" class="post-readmore-btn" style="opacity:0.5">read more</label>
            <div class="post-readmore-text">{{ $post->caption }}</div>
        </div>
        <div class="Likes-button">
            
            @if($post->likedBy(Auth::user())->count() > 0)
            <a data-remote="true" rel="nofollow" data-method="DELETE" href="/likes/{{ $post->likedBy(Auth::user())->firstOrfail()->id }}"><img class="Likes-icon" src="/images/blacklike.icon.png" alt=""></i>
            </a>
            
            @else
            <a data-remote="true" rel="nofollow" data-method="POST" href="/posts/{{ $post->id }}/likes"><img class="Likes-icon" src="/images/Likes-icon.png" alt=""></a> 
            
            @endif
            {{ $post->likes->count() }}
            <p style="font-size:20px">likes</p>
        </div>
        <section class="showpage-comment">
            <div class="comment-content">
                <div class="comment-icon-userName">
                    <img class="mypage-smile-icon-comment" src="{{ asset('images/smile.svg') }}"  alt="simle icon"> {{-- アイコン --}}
                    <p class="comment-user-name">User Name</p>
                </div>
                <a href="#">
                    <p class="comment">コメント1</p>
                </a>
            </div>
        </section>
    </div>
    @endforeach
</main>

@endsection