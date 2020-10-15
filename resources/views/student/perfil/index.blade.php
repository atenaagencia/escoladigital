@extends('layouts.user')

<style>
ol.breadcrumb>li.breadcrumb-item, li.breadcrumb-item:active{
    color: white !important;
}

.breadcrumb-item.active{
    font-weight: bold !important;
}

input{
    background-color: transparent !important;
    font-weight: bold !important;
    color: white !important;
}

::placeholder {
  color: white !important;
  opacity: 1; /* Firefox */
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
        <div class="col-md-12 py-4 border-bottom border-secondary">
            <h1 class="page-header-title main-font text-light pt-4">Sobre mim</h1>
            <p class="lead text-secondary mb-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, alias! Laudantium sit voluptatem.
            </p>
            <div id="editor">
                <p>This is some sample content.</p>
            </div>
            <a href="/student/course" class="btn btn-success btn-lg float-right main-font mt-4 mb-3">Atualizar</a>
        </div>
        <div class="col-md-6 mb-4">
            <h1 class="page-header-title main-font text-light py-4">Informações Pessoais</h1>
            <div class="card bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <form action="#">
                        <div class="form-row col">
                            <div class="form-group col-md-12">
                                <label class="text-light" for="inputNome">Nome</label>
                                <input type="text" class="form-control text-light" id="inputNome" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="text-light" for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                            <a href="/student/course" class="btn btn-success btn-lg float-right main-font mt-4">Atualizar</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <h1 class="page-header-title main-font text-light py-4">Planos</h1>
            <div class="card bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <form action="#">
                        <div class="form-row col">
                            <div class="form-group col-md-12">
                                <p class="text-light">Plano Atual:</p>
                                <h3 class="text-light main-font font-weight-bold py-3">Lorem Ipsum</h3>
                                <p class="lead text-light">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                            <a href="/plans" class="btn btn-success btn-lg float-right main-font mt-4">Detalhar</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <h1 class="page-header-title main-font text-light py-4">Alterar Senha</h1>
            <div class="card bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <form action="#">
                        <div class="form-row col">
                            <div class="form-group col-md-12">
                                <label class="text-light" for="senha">informe sua senha atual:</label>
                                <input type="password" class="form-control bg-light text-dark" id="senha">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="text-light" for="senha"><i class="fa fa-lock p-2"></i>crie uma nova senha:</label>
                                <input type="password" class="form-control text-light" id="senha">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="text-light" for="senha"><i class="fa fa-lock p-2"></i>Repita sua nova senha:</label>
                                <input type="password" class="form-control text-light" id="senha">
                            </div>
                            <a href="/student/course" class="btn btn-primary btn-lg float-right main-font mt-4">Atualizar</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
