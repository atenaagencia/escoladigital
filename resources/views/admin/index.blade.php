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
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Geral</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Cursos</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light">
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Alunos</h2>
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
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Consultoria</h2>
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
                    <h2 class="h-100 pl-3 font-weight-bold card-title">Planos</h2>
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
    </div><!--row-->

    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Dados</h1>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
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
</div>
@endsection