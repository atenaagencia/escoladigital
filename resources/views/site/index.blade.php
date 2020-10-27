@extends('layouts.site')

<style>
    .card-header-padding{
        padding: 8rem !important;
    }
</style>
@section('content')
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <div class="container py-3">
                    <i class="fa fa-wifi fa-5x text-light py-3"></i> <i class="fa fa-plus fa-5x text-primary py-3"></i><i class="fas fa-chalkboard-teacher fa-5x text-light py-3"></i>
                </div>
                <h1 class="text-white font-weight-bold">Onde professores e alunos se conectam.</h1>
                <hr class="divider border-primary my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#about">Ver mais</a>
            </div>
        </div>
    </div>
</header>

<!-- About-->
<section class="page-section bg-dark text-white" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="font-weight-bold mt-0">Pesquise um curso ou área de atuação.</h1>
                <!-- <hr class="divider my-4"> -->
                <p class="py-4 main-font lead">Sugestões de pesquisa: <span class="font-weight-bold"><a href="#" class="nav-link d-inline-block">#design</a><a href="#" class="nav-link d-inline-block">#marketing</a><a href="#" class="nav-link d-inline-block">#programação</a></span>.</p>
                <input type="text" class="col-10 mx-auto form-control py-4 mb-4 bg-transparent border border-light text-light" style="border-radius: 30px;">
                <a class="btn btn-primary btn-xl mt-2" href="#portfolio">Pesquisar</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to action-->
<section class="page-section bg-light text-dark" id="services">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col mx-auto text-left">
                <h1 class="py-3 mt-0 font-weight-bold">Categorias</h1>
                <!-- <hr class="divider my-4"> -->
                <div class="card border-0 py-3 bg-transparent">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <div class="card card-content-bottom h-100 bg-white">
                                <div class="card-header card-header-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                                <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                    <h1 class="font-weight-bold text-left main-font mb-2 py-4">Design</h1>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <div class="card card-content-bottom h-100 bg-white">
                            <div class="card-header card-header-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-marketing.jpg') center center; background-size: cover;"></div>
                                <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                    <h1 class="font-weight-bold text-left main-font mb-2 py-4">Marketing</h1>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <div class="card card-content-bottom h-100 bg-white">
                            <div class="card-header card-header-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-development.jpg') center center; background-size: cover;"></div>
                                <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                    <h1 class="font-weight-bold text-left main-font mb-2 py-4">Programação</h1>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <a class="btn btn-dark ml-auto float-right btn-xl mt-2" href="#">Todos os cursos</a>
            </div>
        </div>
    </div>
</section>


<!-- Consultoria-->
<section class="p-5 bg-dark text-white" id="lorem">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col mx-auto text-left">
                <h1 class="mt-0 py-2">Dúvidas no curso? <b>nós podemos te ajudar</b>.</h1>
                <!-- <hr class="divider my-4"> -->
                <p class="py-4 main-font lead">Lorem ipsum dolor sit amet consectetur adipisicing elit <span class="font-weight-bold text-primary">consultoria</span>.</p>
                <a class="btn btn-primary btn-xl mt-2" href="#">Saiba como</a>
            </div>
        </div>
    </div>
</section>

<!-- About-->
<section class="page-section card-content-bottom bg-light text-dark" id="lorem">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col mx-auto text-left">
                <h1 class="mt-0 py-2">Conheça mais sobre a <b>array</b>.</h1>
                <p class="py-4 main-font lead col-11 ml-0 pl-0 text-justify">Odit nihil quidem doloribus aliquid corporis dignissimos, laborum placeat dolorum molestiae voluptate.</p>
                <a class="btn bg-array text-light btn-xl mt-2" href="#">Ver mais</a>
            </div>
            <!-- <div class="col-3 text-center py-auto my-auto">
                <div class="row justify-content-center mx-auto">
                    <img src="{{asset('img/a.png')}}" width="100%" alt="" class="p-3">
                </div>
            </div> -->
            <div class="col-5 text-center py-auto my-auto">
                <div class="row justify-content-center mx-auto">
                    <img src="" alt="seila" class="bg-light p-2">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider my-4" />
                <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div>+1 (555) 123-4567</div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
            </div>
        </div>
    </div>
</section>
@endsection