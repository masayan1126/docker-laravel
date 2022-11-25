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
                <form action="" method="POST">アイコン😊（仮）</form>
                <p class="edit-user-name">User Name（仮）</p>
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
                <p class="edit-select-picture-question">change your files</p>
            </div>
            <div class="select-pictures">
                {{-- ファイルを消す＋追加する（最低１枚・上限５枚） --}}
                <label class="file">
                    <input type="file" name="edit-image" multiple='multiple' id="edit-image" style="display:none">
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
                <textarea name="edit-caption" id="edit-caption" cols="30" rows="10" placeholder="Edit your Caption"></textarea>
            </div>
        </section>
        
        {{-- 5.編集ボタン --}}
        <div class="edit-button">
            <img class="edit-icon" src="images/edit-icon.png" alt="">
            <button class="edit">Edit</button>
        </div>
        </form>
    </div>
</main>
    
@endsection