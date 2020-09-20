@extends('layouts.admin')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Ficha Pessoal</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/admin/student">Alunos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">2005</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS DADOS - STUDENT SECTION-->

<div class="container mt-4">

    <div class="row py-4 p-3">
        <h1 class="page-header-title main-font text-light font-weight-bold">Aluno: Philip Santos (2005)</h1>
        <a href="/admin/student/edit" class="btn btn-success ml-auto col-lg-2 main-font h1">Editar Ficha</a>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <label for="exampleFormControlSelect1" class="py-4 h1">Informações Pessoais</label>

                        <div class="jumbotron p-4">
                            <p class="lead">
                                <ul>
                                    <li>Número de Matrícula: 2005</li>
                                    <li>Nome Completo: Philip Santos</li>
                                    <li>Data de Nascimento: 01-01-1990</li>
                                    <li>Endereço: Rua quatro, 400, Olarias, Juazeiro-BA 48904137</li>
                                    <li>Profissão: Estudante</li>
                                    <li>E-mail: teste@email.com</li>
                                    <li>Data de cadastro: 20/20/2020</li>
                                </ul>
                            </p>
                        </div>

                        <div class="form-group py-4">
                            <div class="btn btn-dark main-font col-lg-3 float-right py-2"><i class="fa fa-print mr-3"></i>Imprimir Ficha</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection