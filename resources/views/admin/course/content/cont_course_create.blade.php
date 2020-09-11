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
                            <li class="breadcrumb-item"><a href="/admin/course/content">Photoshop CS6</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Aula 01</li>
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
        <h1 class="page-header-title main-font text-light font-weight-bold">Photoshop CS6: Aula 01</h1>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-2 py-4">
            <div class="card bg-light">
                <div class="card-body main-font py-4 bg-light">
                    <form>
                        <label for="exampleFormControlSelect1" class="py-4 h1">Escolha uma seção</label>
                        <div class="form-group row">
                            <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Boas Vindas</option>
                                    <option>Requisitos</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-success btn-block"><i class="fa fa-plus pr-2"></i>Adicionar Seção</a>
                            </div>
                        </div>

                        <label for="exampleFormControlSelect1" class="py-4 h1">Escolha um Título</label>

                        <div class="form-group row">
                            <div class="col">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum">
                            </div>
                        </div>

                        <label for="exampleFormControlSelect1" class="py-4 h1">Enviar vídeo</label>
                        
                        <div class="jumbotron p-4">
                            <p class="lead">
                                <ul>
                                    <li>Qualidade Mínima: 720p</li>
                                    <li>Resolução Mínima: 1366x768</li>
                                    <li>Tempo Estimado de vídeo: 10 minutos</li>
                                </ul>
                            </p>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>  

                        <label for="exampleFormControlSelect1" class="py-4 h1">Conteúdo Adicional</label>
                        <div class="jumbotron p-4">
                            <p class="lead">
                                <ul>
                                    <li>Envios apenas em PDF, Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum amet quia beatae dolorum distinctio deserunt animi molestias expedita! Voluptatibus quis alias sunt libero ut ducimus iste quam placeat porro reprehenderit!</li>
                                </ul>
                            </p>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group py-4">
                            <div class="btn btn-primary main-font col-lg-3 float-right py-2">Criar</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection