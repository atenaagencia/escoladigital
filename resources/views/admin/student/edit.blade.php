@extends('layouts.admin')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Editar Ficha Pessoal</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/admin/student">Alunos</a></li>
                            <li class="breadcrumb-item"><a href="/admin/student/show">2005</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
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
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <label for="exampleFormControlSelect1" class="py-4 h1">Informações Pessoais</label>

                        <div class="form-group row">
                            <div class="col">
                                <label for="full_name">Nome Completo</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="nasc_date">Data de Nascimento</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="street">Rua</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="numero">Número</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="zone">Bairro</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="city">Cidade</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="occupation">Profissão</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="occupation">E-mail:</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="student_id">Matrícula</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlSelect1">Tipo de Plano</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group py-4">
                            <div class="btn btn-primary main-font col-lg-3 float-right py-2">Alterar Ficha</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection