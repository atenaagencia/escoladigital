@extends('layouts.admin')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Mural</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/admin/assistance">Consultoria</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Novo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS CURSOS SECTION-->

<div class="container mt-4">
    
    <div class="row py-4 p-3">
        <h1 class="page-header-title main-font text-light font-weight-bold">Nova Consultoria</h1>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <label for="exampleFormControlSelect1" class="py-4 h1">Escolha a Data e Horário:</label>
                        <div class="form-group row">
                            <div class="col">
                                <label for="#">Data Abreviada</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="#">Hora de Incio</label>
                                <input type="time" class="form-control">
                            </div>
                            <div class="col">
                                <label for="#">Hora de Termino</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <label for="exampleFormControlSelect1" class="py-4 h1">Escolha um Tutor:</label>
                        <div class="form-group row">
                            <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-primary btn-block"><i class="fa fa-plus pr-2"></i>Adicionar Tutor</a>
                            </div>
                        </div>

                        <label for="exampleFormControlSelect1" class="py-4 h1">Informações sobre o curso:</label>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="#">Categoria</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <label for="#">Curso</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col" style="margin-top: 1.8rem !important;">
                                <a href="#" class="btn btn-secondary btn-block"><i class="fa fa-spinner"></i></a>
                            </div>
                            <div class="col-12 py-3">
                                <label for="#">Selecione o Aluno:</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>PHILIP RAMON DE ARAUJO SANTOS</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group py-4">
                            <div class="btn btn-success main-font col-lg-3 float-right py-2">Cadastrar</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection