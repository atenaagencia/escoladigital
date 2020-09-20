@extends('layouts.admin')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Plano</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/home">Array</a></li>
                            <li class="breadcrumb-item"><a href="/admin/plan">Planos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Novo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- PLANO SECTION-->

<div class="container mt-4">
    
    <div class="row py-4 p-3">
        <h1 class="page-header-title main-font text-light font-weight-bold">Novo Plano</h1>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="py-4 h1">Escolha um título:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="py-4 h1">Insira uma descrição:</label>
                            <textarea name="#" id="" cols="30" rows="6" class="form-control"></textarea>
                        </div>

                        <label for="exampleFormControlSelect1" class="py-4 h1">Sobre o Plano:</label>

                        <div class="form-group row">
                            <div class="col">
                                <label for="#">Valor</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="#">Selecione o Status</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Ativo</option>
                                    <option>Inativo</option>
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