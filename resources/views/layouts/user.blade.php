<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Array - Escola Digital</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- <script src="https://use.fontawesome.com/cdd53714a0.js"></script> -->
    <script src="https://kit.fontawesome.com/a7e6020e63.js" crossorigin="anonymous"></script>
</head>
<body class="bg-too-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand main-font font-weight-bold text-light" href="{{ url('/') }}">
                    <h3 class="mt-3">Array <i class="fa fa-code"></i></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav justify-content-between main-font lead">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/courses" role="button">
                                    Catálogo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#" role="button">
                                    Consultoria
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#" role="button">
                                    Fóruns
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu rounded-0 dropdown-menu-right bg-too-dark border border-info" aria-labelledby="navbarDropdown">
                                    <a href="#" class="dropdown-item bg-too-dark text-light">Meu Perfil</a>
                                    <a href="/plans" class="dropdown-item bg-too-dark text-light">Meu Plano</a>
                                    <a href="/conquistas" class="dropdown-item bg-too-dark text-light">Conquistas</a>
                                    <a class="dropdown-item bg-too-dark text-light font-weight-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
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

        <main class="py-4" style="margin-bottom: 70px !important">
            @yield('content')
        </main>
    </div>
    <footer class="footer sticky bg-dark">
        <div class="container text-center p-2">
            <p class="lead main-font text-light">Array | 2020.</p>
        </div>
    </footer>
</body>
</html>
