@extends('layouts.user')

<style>
ol.breadcrumb>li.breadcrumb-item, li.breadcrumb-item:active{
    color: white !important;
}

.breadcrumb-item.active{
    font-weight: bold !important;
}
</style>
@section('content')
<header class="page-header text-dark pb-5" style="background: linear-gradient(to left, #B06AB3, #4568DC) !important">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title text-light font-weight-bold main-font">Meu Perfil</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="container">
    <div class="row">
        <div class="col-md-12 mb-4 py-4">
            <h1 class="page-header-title main-font text-light py-4">Sobre mim</h1>
            <div class="card bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4 py-4">
            <h1 class="page-header-title main-font text-light font-weight-bold py-4">Informações Pessoais</h1>
            <div class="card bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. porro repellendus maxime eius.
                    </p>
                    <a href="/student/course" class="btn btn-primary float-right main-font font-weight-bold">Ver Mais <i class="ml-3 fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
