@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/show.css') }}"> --}}

@section('content')

<main>
    <div class="show-allpage">
        <form action=" " method="POST" enctype="multipart/form-data">
        @csrf

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
                        <div class="showpage-country-name"><p>Canada</p></div>
                        <div class="showpage-posted-files-box">
                            <img class="showpage-posted-files" src="{{ asset('images/posted_1.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </section>
        
        {{-- 3.キャプションの表示 --}}
        <section class="showpage-caption">
            <div class="caption-content">
                <a href="#">
                    <p class="caption">キャプション</p>
                </a>
            </div> 
        </section>

        {{-- 4．コメントの表示 --}}
        <section class="showpage-comment">
            <div class="comment-content">
                <div>
                    <ul class="showpage-show-name-list-comment">
                        <li>
                            <img class="mypage-smile-icon-comment" src="{{ asset('images/smile.svg') }}"  alt="simle icon"> {{-- アイコン --}}
                        </li>
                        <li class="comment-user-name">
                            User Name 
                        </li>
                    </ul>
                    <a href="#">
                        <p class="comment">コメント1</p>
                    </a>
                </div> 
            </div>
        </section>

        </form>
    </div>
</main>
    
@endsection