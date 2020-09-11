@extends('layouts.admin')

<style>

video {
  width: 100% !important;
  height: auto;
  max-height: 500px !important;
}

</style>

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
                        <div class="form-group row">
                            <div class="col-4">
                                <label for="exampleFormControlSelect1">Seção</label>
                                <select disabled class="form-control" id="exampleFormControlSelect1">
                                    <option>Boas Vindas</option>
                                    <option>Requisitos</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <label for="exampleFormControlInput1">Titulo</label>
                                <input disabled type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum">
                            </div>
                        </div>

                        <label for="exampleFormControlSelect1" class="py-4">Vídeoaula:</label>
                        <div class="col-12 p-0 m-0 border-0 rounded" height="100px">
                            <main class="player">
                                <video src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/h264.mov" controls></video>
                            </main>
                        </div>

                        <label for="exampleFormControlSelect1" class="py-4">Enviar novo vídeo:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input disabled type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>

                        <label for="exampleFormControlSelect1">Conteúdo Adicional:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input disabled type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection