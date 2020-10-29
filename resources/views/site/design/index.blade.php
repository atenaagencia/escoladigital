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
                    <h1 class="page-header-title text-light font-weight-bold main-font">Cursos de Design</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="{{asset('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Design</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Call to action-->
<section class="page-section pt-4 bg-light text-dark" id="categories">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col mx-auto text-left">
                <h2 class="mb-1 mt-4">Todos os cursos em <span class="font-weight-bold">Design</span></h2>
                <!-- <hr class="divider my-4"> -->
                <div class="card border-0 py-3 bg-transparent">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
                            <a href="/category/design/interface" class="nav-link p-0" id="link-hover">
                                <div class="card card-content-bottom h-100 bg-white">
                                    <div class="card-header card-header-padding" style="background: url('https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') center center; background-size: cover;"></div>
                                    <div class="card-body main-font text-dark pl-xl-4 pt-xl-0 p-5">
                                        <h1 class="font-weight-bold text-left main-font mb-2 py-4">UI/UX</h1>
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