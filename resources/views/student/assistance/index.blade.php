@extends('layouts.user')

@section('content')
<header class="page-header text-dark pb-5" style="background: linear-gradient(to left, #B06AB3, #4568DC) !important">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title text-light font-weight-bold main-font">Consultoria</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/" class="text-dark">Início</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultoria</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS CURSOS SECTION-->
<div class="container py-4">
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Horário Atual:</h1>
    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 p-3">
                    <p class="lead p-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Horários Disponíveis</h1>
    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light p-4">
                    <div class="row p-3">
                        <div class="form-group col-md-4 pt-3">
                            <label for="inputState" class="lead">Categoria</label>
                            <select id="inputState" class="form-control">
                                <option selected>Selecione...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 pt-3">
                            <label for="inputState" class="lead">Curso</label>
                            <select id="inputState" class="form-control">
                                <option selected>Selecione...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 pt-3">
                            <br>
                            <button class="btn btn-too-success btn-block " type="submit" style="margin-top: 0.77rem !important;"><i class="fa fa-search pr-3"></i>Buscar</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-0 p-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <caption class="text-light">Lista de Horários</caption>
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Dia</th>
                                    <th scope="col">Horário</th>
                                    <th scope="col">Professor (a)</th>
                                    <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="text-light">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Segunda-feira</td>
                                        <td>15:00 - 16:00</td>
                                        <td>Herbet Junior</td>
                                        <td><button type="button" class="btn btn-primary main-font font-weight-bold">Aderir</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Segunda-feira</td>
                                        <td>15:00 - 16:00</td>
                                        <td>Herbet Junior</td>
                                        <td><button type="button" class="btn btn-primary main-font font-weight-bold">Aderir</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Quarta-feira</td>
                                        <td>13:00 - 14:00</td>
                                        <td>Philip Ramon</td>
                                        <td><button type="button" class="btn btn-primary main-font font-weight-bold">Aderir</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!--row-->
</div>
@endsection
