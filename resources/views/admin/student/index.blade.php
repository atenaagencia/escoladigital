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
                            <li class="breadcrumb-item active" aria-current="page">Alunos</li>
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
        <h1 class="page-header-title main-font text-light font-weight-bold">Alunos</h1>
        <!-- <a href="/admin/student/new" class="btn btn-success ml-auto col-lg-2 main-font h1">Novo Curso</a> -->
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
                                <th scope="col">Nome</th>
                                <th scope="col">Matricula</th>
                                <th scope="col">Histórico</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Philip Santos</td>
                                    <td>2005</td>
                                    <td><a href="/admin/student/content" class="btn btn-primary">Editar<i class="ml-3 fa fa-edit"></i></a></td>
                                    <td>Ativo</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/student/show" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/student/edit" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Philip Santos</td>
                                    <td>2005</td>
                                    <td><a href="/admin/student/content" class="btn btn-primary">Editar<i class="ml-3 fa fa-edit"></i></a></td>
                                    <td>Ativo</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/student/show" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/student/edit" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Philip Santos</td>
                                    <td>2005</td>
                                    <td><a href="/admin/student/content" class="btn btn-primary">Editar<i class="ml-3 fa fa-edit"></i></a></td>
                                    <td>Ativo</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/admin/student/show" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/student/edit" class="btn btn-dark"><i class="fa fa-edit"></i></a>
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