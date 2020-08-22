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
<header class="page-header bg-dark text-light pb-10 border-bottom border-primary">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font text-light font-weight-bold py-2">Aula 05: Métodos e Requisições</h1>
                    <div class="page-header-subtitle">Programador Full Stack</div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <button class="btn btn-too-dark main-font font-weight-bold text-uppercase p-3 mr-2">Anterior</button>
                    <button class="btn btn-too-success main-font font-weight-bold text-uppercase p-3">Próximo</button>
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
                    <div class="row align-items-center p-0 m-0">
                        <div class="col-xl-12 col-xxl-12 p-0 m-0 border-0">
                            <main class="player">
                                <!-- <p>A video!</p> -->
                                <video src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/h264.mov" controls></video>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="float-right row">
            <div class="mr-3">
                <p class="lead main-font font-weight-bold text-light">Avalie esta aula:</p>
            </div>
            <div>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                <i class="far fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
            </div>
            
        </div>
    </div>

    <!-- MEUS CURSOS SECTION-->
    <h1 class="page-header-title main-font text-light font-weight-bold mt-5 py-2">Conteúdo Adicional</h1>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-4 py-4">
            <div class="card bg-dark border border-primary shadow rounded-0">
                <div class="card-body text-light main-font font-weight-bold pl-xl-4 p-5">
                    <p class="lead p-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius et rerum fugit ex quas delectus tenetur alias voluptatem dolorem
                        exercitationem reprehenderit commodi pariatur distinctio corrupti, ullam ut deleniti cupiditate voluptates!
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
