@extends('layouts/app')
<head>
    <link rel="stylesheet" href="{{ asset('/css/post.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
@section('content')
<main>
    <div class="post-box">
        <div class="post-username-box">
            <p class="post-username">○ User Nmae</p>
        </div>
        <p class="post-countryname">Canada</p>
        <a href=""><img src="{{ asset('images/lay_omiso.jpeg') }}" alt="ねこ" width="240" height="135"></a>
        <div class="post-commentbox">
            <input type="checkbox" id="post-readmore" class="post-readmore">
            <label for="post-readmore" class="post-readmore-btn" style="opacity:0.5">read more</label>
            <div class="post-readmore-text">特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。</div>
        </div>
    </div>

    <div class="post-box">
        <div class="post-username-box">
            <p class="post-username">○ User Nmae</p>
        </div>
        <p class="post-countryname">Canada</p>
        <a href=""><img src="{{ asset('images/lay_omiso.jpeg') }}" alt="ねこ" width="240" height="135"></a>
        <div class="post-commentbox">
            <input type="checkbox" id="post-readmore" class="post-readmore">
            <label for="post-readmore" class="post-readmore-btn" style="opacity:0.5">read more</label>
            <div class="post-readmore-text">特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。特定の文字数を超えるとキャプションが省略されます。readmoreボタンを押すと省略された文章が全文表示されます。</div>
        </div>
    </div>
</main>

@endsection