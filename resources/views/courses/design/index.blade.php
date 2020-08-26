@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Cursos de Design</h1>
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

<div class="container py-4">
    <div class="row">
        <div class="col-xxl-4 col-xl-4 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <a href="/courses/design/interface" class="text-light"><h2 class="font-weight-bold py-4 card-title">Design de Interfaces UI e UX</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <a href="/courses/development" class="text-light"><h2 class="font-weight-bold py-4 card-title">Curso Completo de PHP</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <a href="/courses/marketing" class="text-light"><h2 class="font-weight-bold py-4 card-title">Curso Completo de React</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <a href="/courses/design" class="text-light"><h2 class="font-weight-bold py-4 card-title">Curso Completo do Desenvolvedor Web</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <a href="/courses/development" class="text-light"><h2 class="font-weight-bold py-4 card-title">Curso Completo de PHP</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-header p-5" style="background: url('https://storage.googleapis.com/gd-wagtail-prod-assets/original_images/io19_designguide_hero_C_Share_UbDlrD3.png') no-repeat center center fixed; background-size: cover;"></div>
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <a href="/courses/marketing" class="text-light"><h2 class="font-weight-bold py-4 card-title">Curso Completo de React</h2></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection