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
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .b-color{
                color: #00BFFF !important;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href="#" style="text-transform: capitalize;">Array <i class="fa fa-code"></i></a>
                </div>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">ENTRAR</a>
                    @endauth
                </div>
            @endif

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
