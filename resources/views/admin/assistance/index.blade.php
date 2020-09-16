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
                            <li class="breadcrumb-item active" aria-current="page">Consultoria</li>
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
        <h1 class="page-header-title main-font text-light font-weight-bold">Consultoria</h1>
        <a href="/admin/assistance/new" class="btn btn-success ml-auto col-lg-2 main-font h1">Adicionar Consultoria</a>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-uppercase font-weight-bold">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data</th>
                                <th scope="col">Horário</th>
                                <th scope="col">Tutor</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>21/10/2030</td>
                                    <td>15:00 - 16:00</td>
                                    <td>Philip Ramon</td>
                                    <td>Design</td>
                                    <td>Photoshop CS6</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/assistance/show" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/assistance/edit" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>21/10/2030</td>
                                    <td>15:00 - 16:00</td>
                                    <td>Philip Ramon</td>
                                    <td>Design</td>
                                    <td>Photoshop CC</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/assistance/show" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/assistance/edit" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>21/10/2030</td>
                                    <td>15:00 - 16:00</td>
                                    <td>Philip Ramon</td>
                                    <td>Design</td>
                                    <td>InDesign CS6</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/assistance/show" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/assistance/edit" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection