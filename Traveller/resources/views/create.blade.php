@extends('layouts/app')
<head>
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
</head>
@section('content')
<main>
    <div class="create-allpage">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="create-select-country">
            <p class="create-select-country-question">
                Select a country
            </p>
            <select name="create_country" id="create-country">
                <option value="データベースから国名を持ってくる">データベースから国名を持ってくる</option>
                <option value="america">例)アメリカ</option>
                <option value="filipine">例）フィリピン</option>
                <option value="chaina">例）中国</option>
                {{-- 上記のvalueと表示される分の部分はDBに国名を入れた上でそれを引用し、表示できるようにする --}}
            </select>
        </div>

        <div class="create-select-picture">
            <p class="create-select-picture-question">
                Select picture
            </p>
            <input type="file" name="create_image" multiple='multiple' id="create-image">
        </div>

        <div class="create-write-caption">
            <p class="create-write-caption-question">
                Write a caption
            </p>
            <textarea name="create_caption" id="create-caption" cols="30" rows="10" placeholder="内容を入力してください"></textarea>
        </div>
        <div class="create-post-button">
            <button type="submit">Create</button>
        </div>
        </form>
    </div>
</main>
    
@endsection