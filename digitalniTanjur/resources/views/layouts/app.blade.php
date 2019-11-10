<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script>
    function onSubmit(token) {
        document.getElementById("register-form").submit();
    }
    </script>
<script type="text/javascript">
    function changemysize(myvalue) {
        var div = document.getElementById("body");
        var newSize =  myvalue + "px";

        document.cookie = "fontCookie=" + newSize+"; path=/";
    }
</script>
<script type="text/javascript">
    function changemycolor(myvalue) {
        var div = document.getElementById("body");
        var newColor =  myvalue;

        document.cookie = "colorCookie=" + newColor+"; path=/";
    }
</script>
    <script>
        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length == 2) return parts.pop().split(";").shift();
        }

        function setFontSize() {
            var cookieFont = getCookie("fontCookie");
            var div = document.getElementById("body");
            div.style.fontSize = cookieFont;
        }

        function setColor() {
            var cookieColor = getCookie("colorCookie");
            var div = document.getElementById("body");
            div.style.backgroundColor = cookieColor;
        }

        function onloadAll() {
            setFontSize();
            setColor();
        }
    </script>
    
</head>
<body onload="onloadAll()" id="body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Digitalni Tanjur
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/meni">Meni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vinska">Vinska karta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/recenzije">Recenzije</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Prijava') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registracija') }}</a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->hasAnyRole('Administrator'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin">Admin početna</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.korisnici.index') }}">Upravljanje korisnicima</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/tema">Upravljanje temom</a>
                                </li>
                            @endif
                        
                            @if (Auth::user()->hasAnyRole('Moderator'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('moderator.index') }}">Moderator početna</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('moderator.stolovi.index') }}">Stolovi</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('moderator.meni.index') }}">Meni</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('moderator.vinska.index') }}">Vinska karta</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('moderator.kuponi.index') }}">Kuponi</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('moderator.rezervacije.index') }}">Rezervacije</a>
                                </li>
                            @endif

                            @if (Auth::user()->hasAnyRole('Korisnik'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('korisnik.index') }}">Korisnik početna</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('korisnik.rezervacije.index') }}">Rezervacije</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('korisnik.recenzije.index') }}">Recenzije</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('korisnik.kuponi.index') }}">Kuponi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('korisnik.poruke.index') }}">Poruke</a>
                                </li>
                            @endif
                            
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Odjava') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
