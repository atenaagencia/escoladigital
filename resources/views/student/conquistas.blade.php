@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-10 border-bottom border-warning">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Minhas Conquistas</h1>
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
                                <h1 class="text-primary font-weight-bold main-font">
                                    <i class="fa fa-certificate mr-3"></i>Aluno Premium
                                </h1>
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

    <div class="row mt-4">
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card bg-gray" style="border-top: 5px solid yellow !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Aluno Premium</h1>
                    <p class="card-text">Concedido ao adquirir o Plano de Estudos Premium.</p>
                    <p class="lead">Concluido!</p>
                    <div class="progress">
                        <div class="progress-bar w-100 bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-peaceful float-right main-font font-weight-bold">Ativo <i class="ml-3 fa fa-check-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Concluido!</p>
                    <div class="progress">
                        <div class="progress-bar w-100 bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-light float-right main-font font-weight-bold">Ativar</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Falta 30 aulas para desbloquear</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-too-dark float-right main-font font-weight-bold"><i class="fa fa-lock text-warning"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Falta 30 aulas para desbloquear</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-too-dark float-right main-font font-weight-bold"><i class="fa fa-lock text-warning"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Falta 30 aulas para desbloquear</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 39%" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-too-dark float-right main-font font-weight-bold"><i class="fa fa-lock text-warning"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Falta 30 aulas para desbloquear</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 89%" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-too-dark float-right main-font font-weight-bold"><i class="fa fa-lock text-warning"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Falta 30 aulas para desbloquear</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-too-dark float-right main-font font-weight-bold"><i class="fa fa-lock text-warning"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 py-3">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Iniciante</h1>
                    <p class="card-text">Concedido ao assistir 50 aulas de qualquer curso na plataforma.</p>
                    <p class="lead">Falta 30 aulas para desbloquear</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" readonly="" class="btn btn-too-dark float-right main-font font-weight-bold"><i class="fa fa-lock text-warning"></i></a>
                </div>
            </div>
        </div>
        
    </div><!--row-->

</div>
@endsection
