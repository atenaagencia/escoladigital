@extends('layouts.user')
<style>
video {
  width: 100% !important;
  height: auto;
  max-height: 500px !important;
}

main.player{
    position: relative;
    max-height: 100%;
    width: 100%;
    height: 100%;
}

.pb-10{
    padding-bottom: 6rem !important;
}
.container-teste{
    padding-left: 1.5rem!important;
    padding-right: 1.5rem!important;
}

.mt-n10, .my-n10 {
    margin-top: -3rem !important;
}

.fa-2x {
    font-size: 1.6em !important;
}
</style>

@section('content')
<header class="page-header bg-dark text-light pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font text-light font-weight-bold py-2">Aula 05: Métodos e Requisições</h1>
                    <div class="page-header-subtitle">Lorem ipsum</div>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="/">Meus Cursos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Programador Full Stack</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-n10">
    <div class="row">
        <div class="col-xxl-4 col-xl-12 mb-4">
            <div class="card h-100 border-0 rounded-0">
                <div class="card-body h-100 d-flex flex-column justify-content-center p-0 border-0">
                    <div class="row align-items-top bg-gray p-0 m-0 shadow border-0">
                        <div class="col-xl-8 col-xxl-8 p-0 m-0 border-0 rounded">
                            <main class="player">
                                <!-- <p>A video!</p> -->
                                <video src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/h264.mov" controls></video>
                            </main>
                        </div>
                        <div class="h-100 col-xl-4 col-xxl-4 p-0 m-0 border-0 rounded">
                            <h1 class="page-header-title main-font text-light font-weight-bold p-3">Playlist</h1>
                            <ul class="list-group list-group-flush py-3 p-3">
                                <li class="list-group-item bg-transparent border-light text-light main-font">Cras justo odio</li>
                                <li class="list-group-item bg-transparent border-light text-light main-font">Dapibus ac facilisis in</li>
                                <li class="list-group-item bg-transparent border-light text-light main-font">Morbi leo risus</li>
                                <li class="list-group-item bg-transparent border-light text-light main-font">Porta ac consectetur ac</li>
                                <li class="list-group-item bg-transparent border-light text-light main-font">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="float-left">
            <a href="{{asset('home')}}" class="lead text-light">
                <i class="fa fa-arrow-left mr-3"></i>
                Todos os Cursos
            </a>
        </div>
        <div class="float-right row">
            <div class="mr-3">
                <p class="lead main-font font-weight-bold text-light">Avalie esta aula:</p>
            </div>
            <div class="rating">
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="far fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
            </div>
        </div>
    </div>

    <!-- MEUS CURSOS SECTION-->
    <h1 class="page-header-title main-font text-light font-weight-bold mt-5 py-4">Conteúdo Adicional</h1>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-4 py-4">
            <div class="card bg-dark rounded-0" style="border-top: 4px solid white">
                <div class="card-body rounded-0 text-light main-font font-weight-bold pl-xl-4 p-5">
                    <p class="lead p-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius et rerum fugit ex quas delectus tenetur alias voluptatem dolorem
                        exercitationem reprehenderit commodi pariatur distinctio corrupti, ullam ut deleniti cupiditate voluptates!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="page-header-title main-font text-light font-weight-bold py-2">Está com dificuldade? <span class="text-warning">Podemos te ajudar</span>.</h1>

    <p class="lead text-light py-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius et rerum fugit ex quas delectus tenetur alias voluptatem dolorem!
    </p>
    <a href="#" class="btn btn-peaceful main-font font-weight-bold">Solicitar Consultoria</a>


</div>
@endsection
