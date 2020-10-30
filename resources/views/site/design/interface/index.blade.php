@extends('layouts.site')
<style>
a.nav-link#link-hover:hover{
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
</style>
@section('content')
<header class="page-header bg-dark p-5" style=" padding-top: 100px !important">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title text-light font-weight-bold main-font">Interface UI e UX</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="{{asset('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                            <li class="breadcrumb-item"><a href="#">Design</a></li>
                            <li class="breadcrumb-item active" aria-current="page">UI/UX</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="p-5" style="background: url('https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed; background-size: cover;">
    <div class="container py-4">
        <div class="row">
            <div class="col py-4">
                <div class="card bg-light h-100 border-0 shadow-sm">
                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-0">
                        <h2 class="py-4 p-2 card-title">O que vou aprender neste curso?</h2>
                        <p class="lead p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Tempora facere incidunt impedit dignissimos saepe rerum ad odit, minima cum ipsa nobis amet nam?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 py-4">
                <div class="card bg-array text-light h-100 border-0 shadow-sm">
                    <div class="card-body main-font pl-xl-4 pt-xl-0">
                        <div class="row justify-content-center mx-auto">
                            <p class="main-font font-weight-bold pt-3 display-4">4.7</p>
                            <div class="mr-3">
                                <p class="lead main-font">Avaliação do curso</p>
                            </div>
                            <div class="rating">
                                <i class="fas fa-2x fa-laugh text-light float-left m-1 ml-auto"></i>
                                <i class="fas fa-2x fa-laugh text-light float-left m-1 ml-auto"></i>
                                <i class="fas fa-2x fa-laugh text-light float-left m-1 ml-auto"></i>
                                <i class="fas fa-2x fa-laugh text-light float-left m-1 ml-auto"></i>
                                <i class="far fa-2x fa-laugh text-light float-left m-1 ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light p-5">
    <div class="container py-4 mb-2">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 py-4">
                <div class="card card-content-top h-100 bg-transparent">
                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-2">
                        <h2 class="py-4 font-weight-bold card-title">Conteúdo do Curso</h2>
                        <ul class="list-group list-group-flush bg-transparent text-dark p-3">
                            <li class="lead mb-1 ml-3">Cras justo odio <a href="#" class="btn btn-sm btn-primary float-right"> <i class="fa fa-video mr-2"></i>VER</a></li>
                            <li class="lead mb-1 ml-3">Dapibus ac facilisis in <a href="#" class="btn btn-sm btn-light float-right">VER</a></li>
                            <li class="lead mb-1 ml-3">Morbi leo risus <a href="#" class="btn btn-sm btn-light float-right">VER</a></li>
                            <li class="lead mb-1 ml-3">Porta ac consectetur ac <a href="#" class="btn btn-sm btn-light float-right">VER</a></li>
                            <li class="lead mb-1 ml-3">Vestibulum at eros <a href="#" class="btn btn-sm btn-light float-right">VER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 py-4">
                <div class="card card-content-top h-100 bg-transparent">
                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-0">
                        <h2 class="py-4 font-weight-bold card-title">O que preciso saber antes de começar:</h2>
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Tempora facere incidunt impedit dignissimos saepe rerum ad odit, minima cum ipsa nobis amet nam?
                            Incidunt molestias sed tempore, ipsam a consequuntur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container card-content-bottom bg-white shadow p-4">
        <div class="row justify-content-between">
            <div class="col-md-7">
                <ul class="list-group list-group-flush bg-transparent main-font text-dark p-3">
                    <li class="lead mb-1 ml-3">Início imediato</li>
                    <li class="lead mb-1 ml-3">Acesso vitalício</li>
                    <li class="lead mb-1 ml-3">20 Horas de Vídeo + conteúdo adicional</li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-auto ml-auto">
                <a class="py-3 mt-3">
                    <h2 class="font-weight-bold main-font text-right mb-1">R$ 39,90</h2>
                </a>
                <button id="25" class="btn btn-lg btn-too-success main-font mt-3 float-right">
                    <h3>Adquirir agora</h3>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Call to action-->
   
<section class="page-section pt-4 bg-light text-dark" id="categories">
    <hr>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col mx-auto text-left">
                <h2 class="mb-1 mt-4">Cursos em <span class="font-weight-bold">Destaque</span></h2>
                <!-- <hr class="divider my-4"> -->
                <div class="card border-0 py-3 bg-transparent">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <a href="/category/design/interface" class="nav-link p-0" id="link-hover">
                                <div class="card card-content-bottom h-100 bg-white">
                                    <div class="card-header card-header-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                        <h1 class="font-weight-bold text-left main-font mb-2 py-4">Design</h1>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <a href="/category/design/interface" class="nav-link p-0" id="link-hover">
                                <div class="card card-content-bottom h-100 bg-white">
                                    <div class="card-header card-header-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                        <h1 class="font-weight-bold text-left main-font mb-2 py-4">Design</h1>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <a href="/category/design/interface" class="nav-link p-0" id="link-hover">
                                <div class="card card-content-bottom h-100 bg-white">
                                    <div class="card-header card-header-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                        <h1 class="font-weight-bold text-left main-font mb-2 py-4">Design</h1>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection