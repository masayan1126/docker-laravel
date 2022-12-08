@extends('layouts.app_mypage')
@section('content')

<section class="mypage-show-name-section">
    <div class="mypage-name-label-container">
        <ul class="mypage-show-name-list">
            <li>
                <img class="mypage-smile-icon" src="{{ asset('storage/images/user_icon/' . Auth::user()->image_at) }}" alt="">
            </li>
            <li>
                {{ Auth::user()->name}}
            </li>
        </ul>
    </div>
</section>
{{-- <section class="mypage-map-section">
    <div class="mypage-map-display-area">

    </div>
</section> --}}
<section class="mypage-contents-section">
        <div class="mypage-contents-container">
        <div class="mypage-content-card">
            <a href="{{ route('posts.create') }}">
                <div class="mypage-country-name-label"><p>New Post</p></div>
                <div class="mypage-posted-image-box">
                    <img class="mypage-posted-image" src="{{ asset('images/img-create-btn.png') }}" alt="new post">
                    {{-- {{ dd($posts) }} --}}
                    {{-- {{ Post::post()->(Auth::user()->id) }} --}}
                </div>
            </a>
        </div>
        {{-- ここから下がループ --}}
        @foreach ($posts as $post)

        <div class="mypage-content-card">
            <a href="{{ route('posts.show', $post->id ) }}">
                <div class="mypage-country-name-label"><p>{{$post->country_name}}</p></div>
                <div class="mypage-posted-image-box">
                    <img class="mypage-posted-image" src="{{ asset('storage/images/country_img/'. $post->image_1) }}" alt="country picture">
                </div>
            </a>
        </div>
                
    @endforeach
    </div>

</section>
<div class="mt-1 mb-1 row justify-content-center">
    {{ $posts->links() }}
</div>
@endsection