@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Design de Interface UI e UX</h1>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="{{asset('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                            <li class="breadcrumb-item"><a href="#">Design</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Design de Interface</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container py-4">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <h2 class="py-4 card-title">O que vou aprender neste curso?</h2>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Tempora facere incidunt impedit dignissimos saepe rerum ad odit, minima cum ipsa nobis amet nam? 
                    Incidunt molestias sed tempore, ipsam a consequuntur.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <h2 class="py-4 card-title">Conteúdo do Curso</h2>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Tempora facere incidunt impedit dignissimos saepe rerum ad odit, minima cum ipsa nobis amet nam? 
                    Incidunt molestias sed tempore, ipsam a consequuntur.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0">
                    <h2 class="py-4 card-title">O que preciso saber antes de começar:</h2>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Tempora facere incidunt impedit dignissimos saepe rerum ad odit, minima cum ipsa nobis amet nam? 
                    Incidunt molestias sed tempore, ipsam a consequuntur.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-auto ml-auto">
            <button class="btn btn-block btn-too-success main-font py-3 mt-3"><h3>Adquirir agora</h3></button>
        </div>
    </div>
</div>
@endsection