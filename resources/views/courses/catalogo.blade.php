@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Lista de Cursos</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="{{asset('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Todos os Cursos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-n10">
    <div class="row">
        <div class="col-xxl-4 col-xl-12 mb-4">
            <div class="card h-100 border-0 rounded-0">
                <div class="card-body h-100 d-flex flex-column justify-content-center p-0 border-0">
                    <div class="row align-items-center p-0 m-0">
                        <div class="col-xl-9 col-xxl-12 p-4 m-0 border-0">
                            <div class="text-left p-xl-1 m-0 px-4 mb-4 mb-xl-0 mb-xxl-4 border-0">
                                <h1 class="text-primary">Banner</h1>
                                <p class="text-gray-700 mb-0">It's time to get started! View new opportunities now, or continue on your previous work.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-12 bg-gradient-primary-to-secondary p-4 m-0 border-0">
                            <div class="text-center p-xl-3 m-0 px-4 mb-4 mb-xl-0 mb-xxl-4 border-0">
                                <h1 class=" font-weight-bold main-font text-light">139,00</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MEUS CURSOS SECTION-->
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Categorias</h1>

    <!-- style="border-bottom: 0; border-left: 0; border-right: 0; border-top: 20px solid transparent; border-image: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') 30 stretch;"-->

    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content-bottom h-100 bg-gray shadow">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <a href="/courses/design" class="text-light"><h2 class="font-weight-bold py-4 card-title">Design</h2></a>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content-bottom h-100 bg-gray shadow">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <a href="/courses/development" class="text-light"><h2 class="font-weight-bold py-4 card-title">Desenvolvimento</h2></a>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content-bottom h-100 bg-gray shadow">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <a href="/courses/marketing" class="text-light"><h2 class="font-weight-bold py-4 card-title">Marketing Digital</h2></a>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection