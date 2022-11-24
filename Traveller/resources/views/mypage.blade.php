@extends('layouts.app_mypage')
@section('content')

<section class="mypage-show-name-section">

        <ul class="mypage-show-name-list">
            <li>
                <img class="mypage-smile-icon" src="{{ asset('images/smile.svg') }}"  walt="simle icon">
            </li>
            <li>
                User Name
            </li>
        </ul>

</section>
<section class="mypage-map-section">
    <div class="mypage-map-display-area">

    </div>
</section>
<section class="mypage-contents-section">
    <div class="mypage-contents-container">
        <div class="mypage-content-card">
            <a href="#">
                <div class="mypage-country-name-label"><p>Canada</p></div>
                <div class="mypage-posted-image-box">
                    <img class="mypage-posted-image" src="{{ asset('images/posted_1.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="mypage-content-card">
            <a href="#">
                <div class="mypage-country-name-label"><p>Italy</p></div>
                <div class="mypage-posted-image-box">
                    <img class="mypage-posted-image" src="{{ asset('images/posted_2.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="mypage-content-card">
            <a href="#">
                <div class="mypage-country-name-label"><p>England</p></div>
                <div class="mypage-posted-image-box">
                    <img class="mypage-posted-image" src="{{ asset('images/posted_3.png') }}" alt="">
                </div>
            </a>
        </div>
    </div>
</section>

@endsection