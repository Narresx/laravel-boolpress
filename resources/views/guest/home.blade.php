<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    <!-- Scripts -->
    <script src="{{ asset('js/front.js') }}" defer></script>
    <style>

    </style>

</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="navbar">
            @auth
                <a href="{{ url('/admin/home') }}">Admin</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>


        <div class="content" id="root">
        </div>
    </div>

</body>

</html>
