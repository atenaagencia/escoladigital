@extends('layouts.admin')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Conquistas</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/admin/achievement">Conquistas</a></li>
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
        <h1 class="page-header-title main-font text-light font-weight-bold">Novo Título</h1>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <label for="exampleFormControlSelect1" class="py-4 h1">Escolha uma categoria:</label>
                        <div class="form-group row">
                            <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Geral</option>
                                    <option>Cursos</option>
                                    <option>Etc</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-primary btn-block"><i class="fa fa-plus pr-2"></i>Adicionar Categoria</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="py-4 h1">Escolha um título:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="py-4 h1">Descreva o requisito:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ex: Obtido ao concluir 1 curso"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="py-4 h1">Status:</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
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