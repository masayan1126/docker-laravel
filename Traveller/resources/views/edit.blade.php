@extends('layouts/app')
    {{-- <link rel="stylesheet" href="{{ asset('/css/edit.css') }}"> --}}

@section('content')

<main>
    <div class="edit-allpage">
        <form action=" " method="POST" enctype="multipart/form-data">
        @csrf

        {{-- １．アイコンとユーザーネーム --}}
        <section class="icon-name-box">
            <div class="icon-user-name">
                <form action="" method="POST">😊</form>
                <p class="edit-user-name">User Name</p>
            </div>
        </section>

        {{-- ２．国の編集 --}}
        <section class="country-box">
            <div class="select-country">
                <select name="edit-country" id="edit-country">
                    <option value="データベースから国名を持ってくる">country▼(DB)</option>
                    <option value="america">例）アメリカ</option>
                    <option value="filipine">例）フィリピン</option>
                    <option value="chaina">例）中国</option>
                    {{-- 上記のvalueと表示される分の部分はDBに国名を入れた上でそれを引用し、表示できるようにする --}}
                </select>
            </div>
        </section>

        {{-- ３．写真の編集 --}}
        <section class="file-box">
            <div class="change-pictures">
                <p class="edit-select-picture-question">Delete or plus files</p>
            </div>
            <div class="select-pictures">
                {{-- ファイルを消す＋追加する（最低１枚・上限５枚） --}}
                <input type="file" name="edit-image" multiple='multiple' id="edit-image">
            </div>
        </section>

        {{-- ４．キャプションの編集 --}}
        <section class="caption-box">
            <div class="edit-caption">
                <p class="edit-write-caption-question">Edit a caption</p>
            </div>
            <div class="write-caption">
                <textarea name="edit-caption" id="edit-caption" cols="30" rows="10" placeholder="Edit your Caption"></textarea>
            </div>
        </section>
        
        {{-- 5.編集ボタン --}}
        <div class="edit-button">
            <img src="https://icooon-mono.com/00005-%e5%ae%9a%e7%95%aa%e3%83%9a%e3%83%b3%e3%81%ae%e3%83%95%e3%83%aa%e3%83%bc%e3%82%a2%e3%82%a4%e3%82%b3%e3%83%b3%e7%b4%a0%e6%9d%90/" alt="">
            <button>Edit</button>
        </div>
        </form>
    </div>
</main>
    
@endsection