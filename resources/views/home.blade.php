@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">{{ $user->name }}</h1>
                    <div class="page-header-subtitle text-warning main-font lead">
                        <i class="fa fa-certificate"></i>
                        Aluno Premium
                    </div>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/">Array</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS CURSOS SECTION-->

<div class="container mt-4">
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Meus Cursos</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-gray" style="border-top: 5px solid yellow !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Programador Web</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-too-dark nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="p-2 text-dark">75%</span></div>
                        </div>
                    </a>
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Programador Full Stack</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-too-dark nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="p-2 text-dark">75%</span></div>
                        </div>
                    </a>
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray" style="border-top: 5px solid #FE642E !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Lorem Ipsum</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-too-dark nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="p-2 text-dark">75%</span></div>
                        </div>
                    </a>
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="ml-auto float-right text-right pr-xl-4">
            <a href="#" class="lead main-font text-light">VER TODOS <i class="ml-3 fa fa-angle-right text-light pr-3"></i></a>
        </div>
    </div><!--row-->

    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Novidades</h1>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-4 py-4">
            <div class="card bg-light">
                <div class="card-body main-font font-weight-bold pl-xl-4 p-5">
                    <p class="lead p-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius et rerum fugit ex quas delectus tenetur alias voluptatem dolorem
                        exercitationem reprehenderit commodi pariatur distinctio corrupti, ullam ut deleniti cupiditate voluptates!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="page-header-title main-font text-light font-weight-bold py-4">Ficou com duvida na aula? <span class="text-warning">Podemos te ajudar</span>.</h1>

    <p class="lead text-light py-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius et rerum fugit ex quas delectus tenetur alias voluptatem dolorem!
    </p>
    <a href="#" class="btn btn-peaceful main-font font-weight-bold">Solicitar Consultoria</a>

</div>
@endsection
