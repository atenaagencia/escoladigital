<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Array</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('css/site.css')}}" rel="stylesheet" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" />

        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger array-font font-weight-bold" href="#page-top"><h2>array</h2></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item p-2 mt-1 mb-1"><a class="nav-link js-scroll-trigger" href="#categories">Categorias</a></li>
                        <li class="nav-item p-2 mt-1 mb-1"><a class="nav-link js-scroll-trigger" href="#assistance">Consultoria</a></li>
                        <li class="nav-item p-2 mt-1 mb-1"><a class="nav-link js-scroll-trigger" href="#about">Sobre Nós</a></li>
                        <li class="nav-item p-2 mt-1 mb-1"><a class="nav-link js-scroll-trigger" href="#footer">Contact</a></li>
                        <li class="nav-item p-2 mt-1 mb-1"><a class="nav-link js-scroll-trigger" href="{{route('login')}}">Fazer login</a></li>
                        <li class="nav-item btn btn-light text-dark ml-0 pl-0 p-2 m-1"><a class="nav-link js-scroll-trigger text-dark ml-0 pl-0" href="{{route('register')}}">Inscreva-se</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')

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
        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>