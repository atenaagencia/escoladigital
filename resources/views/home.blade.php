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
</style>

@section('content')
<header class="page-header bg-dark text-light pb-10 border-bottom border-primary">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Philip Santos</h1>
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
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-purple shadow rounded-0">
                <div class="card-header main-font text-light h-100">
                    <h3>Programador Web</h3>
                </div>
                <div class="card-body pl-xl-4 p-5">
                    <h5 class="text-light card-title">Special title treatment</h5>
                    <p class="text-light card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn bg-gradient-primary-to-secondary main-font text-light float-right">CONTINUAR</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-primary shadow rounded-0">
                <div class="card-header main-font text-light h-100">
                    <h3>Programador Web</h3>
                </div>
                <div class="card-body pl-xl-4 p-5">
                    <h5 class="text-light card-title">Special title treatment</h5>
                    <p class="text-light card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn bg-gradient-primary-to-secondary main-font text-light float-right">CONTINUAR</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-4 py-4">
            <div class="card bg-dark border border-warning shadow rounded-0">
                <div class="card-header main-font text-light h-100">
                    <h3>Programador Web</h3>
                </div>
                <div class="card-body pl-xl-4 p-5">
                    <h5 class="text-light card-title">Special title treatment</h5>
                    <p class="text-light card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn bg-gradient-primary-to-secondary main-font text-light float-right">CONTINUAR</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
