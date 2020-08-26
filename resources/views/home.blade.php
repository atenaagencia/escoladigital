@extends('layouts.user')

@section('content')
<header class="page-header bg-dark text-light pb-10 border-bottom border-primary">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font">{{ $user->name }}</h1>
                    <div class="page-header-subtitle text-warning main-font lead">
                        <i class="fa fa-certificate"></i>
                        Aluno Premium
                    </div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                <button class="btn btn-light main-font font-weight-bold text-uppercase p-3 mr-2">FÓRUNS</button>
                    <button class="btn btn-peaceful main-font font-weight-bold text-uppercase p-3">CONSULTORIA</button>
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
    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Meus Cursos</h1>

    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-gray" style="border-top: 5px solid yellow !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Programador Web</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn bg-too-dark text-light nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        75%
                    </a>
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card bg-gray" style="border-top: 5px solid #2EFE9A !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="h-100 font-weight-bold py-4 card-title">Programador Full Stack</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn bg-too-dark text-light nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        55%
                    </a>
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray" style="border-top: 5px solid #FE642E !important">
                <div class="card-body main-font text-light pl-xl-4 pt-xl-0 p-5">
                    <h1 class="font-weight-bold py-4 card-title">Lorem Ipsum</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer border-0">
                    <a href="#" class="btn bg-too-dark text-light nav-link main-font font-weight-bold float-left">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        25%
                    </a>
                    <a href="/teste" class="btn btn-light float-right main-font font-weight-bold">Continuar <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="ml-auto float-right text-right pr-xl-4">
            <a href="#" class="lead main-font text-light">VER TODOS <i class="ml-3 fa fa-angle-right text-light pr-3"></i></a>
        </div>
    </div><!--row-->

    <h1 class="page-header-title main-font text-light mt-3 font-weight-bold py-2">Novidades</h1>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 mb-4 py-4">
            <div class="card bg-light">
                <div class="card-body main-font font-weight-bold pl-xl-4 p-5">
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
