@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">Meu Plano</h1>
                    <div class="page-header-subtitle main-font lead py-2">
                        Plano atual: <span class="text-warning">Aluno Premium</span>
                    </div>
                </div>
                <div class="col-auto mt-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent main-font">
                            <li class="breadcrumb-item"><a href="{{asset('home')}}">Início</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Meu Plano</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS CURSOS SECTION-->

<div class="container mt-4">
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Planos Disponíveis</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-2">
                    <h1 class="font-weight-bold py-4 card-title">Básico</h1>
                    <ul class="list-group list-group-flush bg-transparent text-light p-3">
                        <li class="lead ml-3">Cras justo odio</li>
                        <li class="lead ml-3">Dapibus ac facilisis in</li>
                    </ul>
                </div>
                <div class="card-footer border-0">
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Aderir <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-2">
                    <h1 class="font-weight-bold py-4 card-title">Intermediário</h1>
                    <ul class="list-group list-group-flush bg-transparent text-light p-3">
                        <li class="lead ml-3">Cras justo odio</li>
                        <li class="lead ml-3">Dapibus ac facilisis in</li>
                        <li class="lead ml-3">Morbi leo risus</li>
                    </ul>
                </div>
                <div class="card-footer border-0">
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Aderir <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray" style="border-top: 5px solid yellow !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-2">
                    <h1 class="font-weight-bold py-4 card-title">Premium</h1>
                    <ul class="list-group list-group-flush bg-transparent text-light p-3">
                        <li class="lead ml-3">Cras justo odio</li>
                        <li class="lead ml-3">Dapibus ac facilisis in</li>
                        <li class="lead ml-3">Morbi leo risus</li>
                        <li class="lead ml-3">Porta ac consectetur ac</li>
                        <li class="lead ml-3">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="card-footer border-0">
                    <a href="" readonly="" class="btn btn-peaceful float-right main-font font-weight-bold">Ativo <i class="ml-3 fa fa-check-circle"></i></a>
                </div>
            </div>
        </div>
    </div><!--row-->

    <h1 class="page-header-title main-font text-light font-weight-bold mt-5 mb-3">Na dúvida sobre qual plano escolher? <span class="text-warning">Podemos te ajudar</span>.</h1>

    <p class="lead text-light py-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius et rerum fugit ex quas delectus tenetur alias voluptatem dolorem!
    </p>
    <a href="#" class="btn btn-peaceful main-font font-weight-bold">Solicitar Consultoria</a>

</div>
@endsection
