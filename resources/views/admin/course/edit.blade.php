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
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/admin/course">Cursos</a></li>
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
        <h1 class="page-header-title main-font text-light font-weight-bold">Editar Curso</h1>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoria</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Titulo</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição 1 (O que vou aprender neste curso?)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lorem Ipsum"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição 2 (Conteúdo do curso)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lorem Ipsum"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição 3 (O que preciso saber antes de começar)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lorem Ipsum"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="btn btn-success main-font col-lg-3 float-right py-2">Alterar</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection