<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header class="header">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Personal Office</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="container">
                <h1>Top Store</h1>
                <h2>Best by in your country</h2>
            </div>
        </header>
        <nav class="page-navigation">
            <div class="container navbar">
                    <a href="{{route('index')}}">Головна</a>
                    <a href="{{route('offers')}}">Оголошення</a>
                    <a href="{{route('users')}}">Користувачі</a>
                    <a href="{{route('contacts')}}">Магазини</a>
            </div>
        </nav>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <p>Copyright © Example.com 2018</p>
            </div>
        </footer>
    </body>
</html>
