@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Certificados</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/certificate">Certificado</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
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
        <h1 class="page-header-title main-font text-light font-weight-bold">Editar Certificado</h1>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleFormControlInput1">Titulo</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlSelect1">Categoria</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleFormControlSelect1">Tipo de Modalidade</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Curso</option>
                                    <option>Minicurso</option>
                                    <option>Palestra</option>
                                    <option>Oficina</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlSelect1">Tipo de Partipação</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Aluno</option>
                                    <option>Ouvinte</option>
                                    <option>Palestrante</option>
                                    <option>Instrutor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1">Data de Início</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1">Data de Conclusão</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="Duration">Duração (em horas)</label>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group py-3">
                            <div class="btn btn-success main-font col-lg-3 float-right py-2">Alterar</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection