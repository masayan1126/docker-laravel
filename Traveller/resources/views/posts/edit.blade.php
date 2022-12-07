@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/edit.css') }}"> --}}
    <head>
        <link href="{{ asset('css/edit.css') }}" rel="stylesheet" >
    </head>

@section('content')

<main>
    <div class="edit-allpage">
        <form id="post-updata" action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            {{-- １．アイコンとユーザーネーム --}}
            <section class="icon-name-box">
                <div class="icon-user-name">
                    <img src="" alt="">
                    <p class="edit-user-name">User Name（仮）</p>
                </div>
            </section>

            {{-- ２．国の編集 --}}
            <section class="country-box">
                <div class="select-country">
                    <input type="text" name="country_name" id="country_name" value="{{ $post->country_name }}">
                    {{-- <select name="edit-country" id="edit-country">
                        <option value="データベースから国名を持ってくる">{{ $post->country_name }}</option>
                        <option value="america">例）アメリカ</option>
                        <option value="filipine">例）フィリピン</option>
                        <option value="chaina">例）中国</option>
                        {{-- 上記のvalueと表示される分の部分はDBに国名を入れた上でそれを引用し、表示できるようにする
                    </select> --}}
                </div>
            </section>

            {{-- ３．写真の編集 --}}
            <section class="file-box">
                <div class="change-pictures">
                    <p class="edit-select-picture-question">Change your files</p>
                </div>
                {{-- <div>
                    <img src="{{ asset('images/country_img/' . $post->image_1) }}" alt="投稿済みの画像">
                </div> --}}
                <div class="select-pictures">
                    {{-- ファイルを消す＋追加する（最低１枚・上限５枚） --}}
                    <label class="file">
                        <input type="file" name="image_1" multiple='multiple' id="edit-image" style="display:none">
                        Select files
                    </label>
                </div>
            </section>

            {{-- ４．キャプションの編集 --}}
            <section class="caption-box">
                <div class="edit-caption">
                    <p class="edit-write-caption-question">Edit a caption</p>
                </div>
                <div class="write-caption">
                    <textarea name="caption" id="edit-caption" cols="30" rows="10">{{ $post->caption }}</textarea>
                </div>
            </section>
            
            {{-- 5.編集ボタン --}}
            <div class="edit-button">
                <img class="edit-icon" src="images/edit-icon.png" alt="">
                <input class="edit" type="submit" form="post-updata" value="edit">
            </div>
        </form>
    </div>
</main>
    
@endsection