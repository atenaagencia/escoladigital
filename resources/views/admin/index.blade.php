@extends('layouts.admin')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Admin</h1>
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
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-3">Geral</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <a href="/admin/course" class="text-light"><h2 class="h-100 pl-3 font-weight-bold card-title">Cursos</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <a href="/admin/student" class="text-light"><h2 class="h-100 pl-3 font-weight-bold card-title">Alunos</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Instrutores</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <a href="/admin/assistance" class="text-light"><h2 class="h-100 pl-3 font-weight-bold card-title">Consultoria</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Fóruns</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <a href="/admin/plan" class="text-light"><h2 class="h-100 pl-3 font-weight-bold card-title">Planos</h2></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Conquistas</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Avaliações</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <a href="/admin/note" class="text-light"><h2 class="h-100 pl-3 font-weight-bold card-title">Mural</h2></a>
                </div>
            </div>
        </div>
    </div><!--row-->

    <div class="row py-4 p-3 mt-2">
        <h1 class="page-header-title main-font text-light font-weight-bold">Dados</h1>
        <a href="#" class="btn btn-warning ml-auto col-md-2 col-sm-12 main-font h1"><i class="fa fa-file-pdf mr-2"></i>Relatório Completo</a>
    </div>

    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font font-weight-bold p-4">
                    <h2 class="h-100 pl-3 font-weight-bold card-title float-right">103</h2>
                    <h2 class="h-100 pl-3 font-weight-bold card-title clearfix">Alunos:</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font font-weight-bold p-4">
                    <h2 class="h-100 pl-3 font-weight-bold card-title float-right">10</h2>
                    <h2 class="h-100 pl-3 font-weight-bold card-title clearfix">Cursos:</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font font-weight-bold p-4">
                    <h2 class="h-100 pl-3 font-weight-bold card-title float-right">45</h2>
                    <h2 class="h-100 pl-3 font-weight-bold card-title clearfix">Consultorias:</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection