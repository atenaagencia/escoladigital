<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Array - Escola Digital</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

        <script src="https://use.fontawesome.com/cdd53714a0.js"></script>

        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #424242; */
                background-color: white;
                color: #424242 !important;
                /* font-family: 'Nunito', sans-serif !important; */
                font-family: 'Alata', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
                line-height: 1;
                text-align: center;
                font-weight: 700;
                width: 100%;
                max-width: 615px;
                margin: 0 auto;
            }

            .links > a {
                color: #424242;
                padding: 0 25px;
                font-size: 20px;
                font-weight: bold;
                font-family: 'Alata', sans-serif;
                letter-spacing: .1rem;
                text-decoration: none;
                /* text-transform: uppercase; */
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .b-color{
                color: #00BFFF !important;
            }
            .array-font{
                font-family: 'Alata', sans-serif;
            }
        </style>
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Array</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </nav>


        {{--<header class="bg-array p-5 mx-auto text-center">
            <!-- <img src="{{asset('img/logo.png')}}" alt="" width="100px"> -->
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href="#" class="array-font text-light display-5">Array</a>
                </div>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light">ENTRAR</a>
                    @endauth
                </div>
            @endif
        </header>--}}
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="text-center">
                    <i class="fa fa-graduation-cap fa-5x"></i> <i class="fa fa-plus fa-4x m-4"></i> <i class="fa fa-wifi fa-5x"></i>
                </div>
                <div class="title m-b-md col-8 mx-auto py-5">
                   Onde alunos e professores se conectam.
                </div>

                <a href="{{ route('login') }}" class="btn btn-custom btn-custom-2">LOREM IPSUM</a>
            </div>
        </div>
    </body>
</html>
