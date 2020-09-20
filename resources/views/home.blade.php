@extends('layouts.user')

<style>
ol.breadcrumb>li.breadcrumb-item, li.breadcrumb-item:active{
    color: white !important;
}

.breadcrumb-item.active{
    font-weight: bold !important;
}
</style>
@section('content')
<header class="page-header text-dark pb-5" style="background: linear-gradient(to left, #B06AB3, #4568DC) !important">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title text-light font-weight-bold main-font">{{ $user->name }}</h1>
                    <div class="page-header-subtitle main-font lead mt-4">
                        <a href="/conquistas" class="text-light bg-dark nav-link rounded">
                            <i class="fa fa-certificate text-warning pr-3"></i>
                            Aluno Premium
                        </a>
                    </div>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/" class="text-dark">Array</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS CURSOS SECTION-->

<section class="container mt-4">
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-4">Meus Cursos</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content shadow bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Programador Web</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-too-dark nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="p-2 text-dark">75%</span></div>
                        </div>
                    </a>
                    <a href="/student/course" class="btn btn-success float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content shadow bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Programador Full Stack</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-too-dark nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="p-2 text-dark">75%</span></div>
                        </div>
                    </a>
                    <a href="/student/course" class="btn btn-success float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content shadow h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Lorem Ipsum</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-too-dark nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="p-2 text-dark">75%</span></div>
                        </div>
                    </a>
                    <a href="/student/course" class="btn btn-success float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="ml-auto float-right text-right pr-xl-4">
            <a href="#" class="lead main-font text-light">VER TODOS <i class="ml-3 fa fa-angle-right text-light pr-3"></i></a>
        </div>
    </div><!--row-->
</section>
<section class="container mt-3">
    <div class="row">
        <div class="col-md-6 mb-4 py-4">
            <h1 class="page-header-title main-font text-light font-weight-bold py-4">Novidades</h1>
            <div class="card bg-gray shadow">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. porro repellendus maxime eius.
                    </p>
                    <a href="/student/course" class="btn btn-primary float-right main-font font-weight-bold">Ver Mais <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4 py-4">
            <h1 class="page-header-title main-font text-light font-weight-bold py-4">Blog</h1>
            <div class="card bg-gray shadow">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. porro repellendus maxime eius.
                    </p>
                    <a href="/student/course" class="btn btn-primary float-right main-font font-weight-bold">Ver Mais <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
