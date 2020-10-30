@extends('layouts.site')

<style>
a.nav-link#link-hover:hover{
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
.card-content-top-custom{
    border-top: 5px solid !important;
    border-bottom: 5px solid !important;
    border-left: 0 !important;
    border-right: 0 !important;
    border-image: linear-gradient(to left, #B06AB3, #4568DC) 1 !important;
}
</style>
@section('content')

<!-- About-->
<header class="page-section pb-5 bg-white text-dark">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col mx-auto text-left">
                <h1 class="font-weight-bold my-4">Consultoria especializada.</h1>
                <p class="lead py-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus nemo repellendus consequatur, porro nulla quas at atque? Debitis nesciunt, aliquam, doloribus illum sunt sit voluptate eligendi perferendis perspiciatis fuga minima.
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Consultoria-->
<section class="p-5 bg-too-dark text-white">
    <div class="container">
        <h1 class="py-4">Como funciona?</h1>

        <div class="row justify-content-betweeen text-light">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-5">
                <div class="card h-100 border-0">
                    <div class="card-body text-dark border-0">
                        <h2 class="main-font">01 video-conferência por semana. <span class="lead">(via Google Meet)</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-5">
                <div class="card h-100 border-0">
                    <div class="card-body text-dark border-0">
                        <h2 class="main-font">Tira dúvidas e exercícios extras sobre o curso escolhido.</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-light">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-5">
                <div class="card bg-transparent h-100 border-0">
                    <div class="card-body card-content-top-custom bg-transparent">
                        <h2 class="main-font text-uppercase">1. Adquira um Plano. *</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-5">
                <div class="card bg-transparent h-100 border-0">
                    <div class="card-body card-content-top-custom bg-transparent">
                        <h2 class="main-font text-uppercase">2. Escolha um curso.</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-5">
                <div class="card bg-transparent h-100 border-0">
                    <div class="card-body card-content-top-custom bg-transparent">
                        <h2 class="main-font text-uppercase">3. Escolha um dia e horário. </h2>
                    </div>
                </div>
            </div>
        </div>
        <p class="py-4 mt-3 main-font lead">* A consultoria é um pacote que faz parte do pacote de plano <span class="text-primary">intermediário</span> e <span class="text-primary">premium</span>.</p>
        <a class="btn btn-primary btn-xl mb-5" href="/assistance">CONTRATAR UM PLANO</a>
    </div>
</section>
@endsection