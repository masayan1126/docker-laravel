<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

</head>
<body>
    @if (Route::has('login'))
    <div class="top-main">
        <div class="top-right">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}"><img class="header-login-logo"src="./images/loginicon.png" alt="">Login</a>
            

            @if (Route::has('register'))
                <a href="{{ route('register') }}"><img class="header-register-logo"src="./images/registericon.png" alt="">Register</a>
            @endif
        @endauth
        </div>
        <div class="top-title">
            <p class="top-title-text">Traveller</p>
        </div>
        
    </div>
    
@endif
    
</body>
</html>