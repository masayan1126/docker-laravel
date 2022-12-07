@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/show.css') }}"> --}}
    <head>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>

@section('content')

<main>
    <div class="show-allpage">
        <form action="#" method="POST">
        @csrf
        @method('delete')

        {{-- １．アイコンとユーザーネーム --}}
        <section class="showpage-userName">
            <div class="icon-userName">
                <ul class="showpage-show-name-list">
                    <li>
                        <img class="mypage-smile-icon" src="{{ asset('images/smile.svg') }}"  alt="simle icon"> {{-- アイコン --}}
                    </li>
                    <li>
                        User Name  {{-- User Name --}}
                    </li>
                </ul>
            </div>
        </section>

        {{-- 2．国と投稿写真の表示 --}}
        <section class="showpage-country">
            <div class="country-content">
                <div class="show-country">
                    <a href="#">
                        <div class="showpage-country-name"><p>{{ $post->country_name }}</p></div>
                        <div class="showpage-posted-files-box">
                            <img class="showpage-posted-files" src="{{ asset('images/country_img/' . $post->image_1) }}" alt="投稿済みの画像">
                        </div>
                    </a>
                </div>
            </section>
        
        {{-- 3.キャプションの表示 --}}
        <section class="showpage-caption">
            <div class="caption-content">
                {{-- <a href="#"> --}}
                    <p class="caption">{{ $post->caption }}</p>
                {{-- </a> --}}
            </div> 
        </section>

        {{-- 4.Likes --}}
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

        {{-- 5．コメントの表示 --}}
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

        {{-- 6.編集ボタン --}}
        <div class="edit-button">
            <img class="edit-icon" src="images/edit-icon.png" alt="">
            <button class="edit"><a href="{{ route('posts.edit',$post->id) }}">edit</a></button>
        </div>

        {{-- 7.削除ボタン --}}
        <div class="delete-button">
            <img class="delete-icon" src="images/delete-icon.png" alt="">
            <input type="submit" value="Delete" class="delete" onclick="return confirm('本当に削除しますか？');">
        </div>

        </form>
    </div>
</main>
    
@endsection
<img class="Likes-icon" src="images/Likes-icon.png" alt="">