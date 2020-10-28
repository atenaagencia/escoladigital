@extends('layouts.user')

@section('content')
<header class="page-header text-dark pb-5" style="background: linear-gradient(to left, #B06AB3, #4568DC) !important">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title text-light font-weight-bold main-font">Meu Plano</h1>
                    <div class="page-header-subtitle main-font lead text-light py-2">
                        Plano atual: <span class="text-warning">Aluno Premium</span>
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

<div class="container mt-4 py-4">
    <h1 class="page-header-title main-font text-light mt-3 py-2">Planos Disponíveis</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-2">
                    <h1 class="py-4 card-title">Básico</h1>
                    <ul class="list-group list-group-flush bg-transparent text-light p-3">
                        <li class="lead ml-3">Cras justo odio</li>
                        <li class="lead ml-3">Dapibus ac facilisis in</li>
                    </ul>
                </div>
                <div class="card-footer border-0">
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Aderir <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-2">
                    <h1 class="py-4 card-title">Intermediário</h1>
                    <ul class="list-group list-group-flush bg-transparent text-light p-3">
                        <li class="lead ml-3">Cras justo odio</li>
                        <li class="lead ml-3">Dapibus ac facilisis in</li>
                    </ul>
                </div>
                <div class="card-footer border-0">
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Aderir <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card card-content-top h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-2">
                    <h1 class="py-4 card-title">Premium</h1>
                    <ul class="list-group list-group-flush bg-transparent text-light p-3">
                        <li class="lead ml-3">Cras justo odio</li>
                        <li class="lead ml-3">Dapibus ac facilisis in</li>
                    </ul>
                </div>
                <div class="card-footer border-0">
                    <a href="" readonly="" class="btn btn-peaceful float-right main-font font-weight-bold">Ativo <i class="ml-3 fa fa-check-circle"></i></a>
                </div>
            </div>
        </div>
    </div><!--row-->
</div>
@endsection
