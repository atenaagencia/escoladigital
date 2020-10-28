<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Array</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets.pagar.me/checkout/1.1.0/checkout.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{asset('css/site.css')}}" rel="stylesheet" />

    <!-- <script src="https://use.fontawesome.com/cdd53714a0.js"></script> -->
    <script src="https://kit.fontawesome.com/a7e6020e63.js" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
</head>
<body class="bg-too-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md p-3 navbar-light" style="background: #1C1C1C !important">
            <div class="container">
                <a class="navbar-brand" href="{{ asset('home') }}">
                    <h2 class="main-font text-light">array</h2>
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
                                <a class="nav-link text-info" href="/" role="button">
                                    Catálogo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/assistance" role="button">
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

                                <div class="dropdown-menu dropdown-menu-right bg-too-dark" aria-labelledby="navbarDropdown">
                                    <a href="/student/perfil" class="dropdown-item bg-too-dark text-light">Meu Perfil</a>
                                    <a href="/plans" class="dropdown-item bg-too-dark text-light">Meu Plano</a>
                                    <a href="/certificate" class="dropdown-item bg-too-dark text-light">Meus Certificados</a>
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

        <main class="" style="margin-bottom: 70px !important">
            @yield('content')
        </main>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
    <!-- Footer -->
    <section id="footer" class="bg-dark">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02">Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">Get Started</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02">Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">Get Started</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02">Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02">Get Started</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by">Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-left">
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-2x mr-2 fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-2x mr-2 fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-2x mr-2 fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-2x mr-2 fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-2x mr-2 fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark card-content-top py-4">
        <div class="container">
            <div class="small text-right text-light font-weight-bold">
                <img src="{{asset('img/a.png')}}" width="20px" alt="#" class="mr-3">2020, Array.
            </div>
        </div>
    </footer>
</body>
</html>
