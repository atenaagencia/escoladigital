@extends('layouts.user')
<style>
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
                    <h1 class="page-header-title main-font">{{ $user->name }}</h1>
                    <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <button class="btn btn-warning main-font font-weight-bold text-uppercase p-3">Meus cursos</button>
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
                        <div class="col-xl-9 col-xxl-12 p-4 m-0 border-0">
                            <div class="text-left p-xl-1 m-0 px-4 mb-4 mb-xl-0 mb-xxl-4 border-0">
                                <h1 class="text-primary">Bem vindo de volta!</h1>
                                <p class="text-gray-700 mb-0">It's time to get started! View new opportunities now, or continue on your previous work.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-12 bg-gradient-primary-to-secondary p-4 m-0 border-0">
                            <div class="text-center p-xl-3 m-0 px-4 mb-4 mb-xl-0 mb-xxl-4 border-0">
                                <h1 class="display-4 font-weight-bold main-font text-light">29%</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MEUS CURSOS SECTION-->
    <h1 class="page-header-title main-font text-light font-weight-bold py-2">Meus Cursos</h1>

    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-purple shadow rounded-0">
                <div class="card-header bg-too-dark main-font text-light h-100">
                    <h3>Programador Web</h3>
                </div>
                <div class="card-body pl-xl-4 p-5">
                    <h5 class="text-light card-title">Special title treatment</h5>
                    <p class="text-light card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn bg-gradient-primary-to-secondary main-font text-light">CONTINUAR</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-primary shadow rounded-0">
                <div class="card-header bg-too-dark main-font text-light h-100">
                    <h3>Programador Web</h3>
                </div>
                <div class="card-body pl-xl-4 p-5">
                    <h5 class="text-light card-title">Special title treatment</h5>
                    <p class="text-light card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn bg-gradient-primary-to-secondary main-font text-light">CONTINUAR</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-warning shadow rounded-0">
                <div class="card-header bg-too-dark main-font text-light h-100">
                    <h3>Programador Web</h3>
                </div>
                <div class="card-body pl-xl-4 p-5">
                    <h5 class="text-light card-title">Special title treatment</h5>
                    <p class="text-light card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn bg-gradient-primary-to-secondary main-font text-light">CONTINUAR</a>
                </div>
            </div>
        </div>
        <div class="ml-auto float-right text-right pr-xl-4">
            <a href="#" class="lead main-font text-light"><i class="fa fa-arrow-right text-light pr-3"></i>VER TODOS</a>
        </div>
    </div><!--row-->

    <!-- CURSOS RECOMENDADOS SECTION -->
    <h1 class="page-header-title main-font text-light font-weight-bold py-2">Recomendados</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-light shadow rounded-0">
                <div class="card-header bg-too-dark border-0">
                    <i class="fa fa-2x fa-certificate text-warning float-right ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                </div>
                <div class="card-body bg-too-dark text-light main-font font-weight-bold pl-xl-4 p-5">
                    <h1 class="text-left">React Native + Vue JS</h1>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-link main-font text-light font-weight-bold">VER MAIS</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-light shadow rounded-0">
                <div class="card-header bg-too-dark border-0">
                    <i class="fa fa-2x fa-certificate text-warning float-right ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="far fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                </div>
                <div class="card-body bg-too-dark text-light text-left main-font font-weight-bold pl-xl-4 p-5">
                    <h1>Laravel para Frontends</h1>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-link main-font text-light font-weight-bold">VER MAIS</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-light shadow rounded-0 h-100">
                <div class="card-header bg-too-dark border-0">
                    <i class="fa fa-2x fa-certificate text-warning float-right ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="far fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="far fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                </div>
                <div class="card-body h-100 bg-too-dark text-light text-left main-font font-weight-bold pl-xl-4 p-5">
                    <h1>UI e UX</h1>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-link main-font text-light font-weight-bold">VER MAIS</a>
                </div>
            </div>
        </div>
    </div><!--row-->
    <div class="ml-auto text-right pr-xl-4">
        <a href="#" class="lead main-font text-light"><i class="fa fa-arrow-right text-light pr-3"></i>VER TODOS</a>
    </div>

</div>
@endsection
