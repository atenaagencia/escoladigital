@extends('layouts.user')

<style>
ol.breadcrumb>li.breadcrumb-item, li.breadcrumb-item:active{
    color: white !important;
}

.breadcrumb-item.active{
    font-weight: bold !important;
}

.card-header-user-padding {
    padding: 3rem !important;
}
</style>
@section('content')
<header class="page-header bg-array text-dark pb-5">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title text-light main-font">{{ $user->name }}</h1>
                </div>
                <div class="col-auto mt-5">
                    <div class="page-header-subtitle main-font lead mt-4">
                        <a href="/conquistas" class="text-light bg-dark nav-link rounded">
                            <i class="fa fa-certificate text-warning pr-3"></i>
                            Aluno Premium
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MEUS CURSOS SECTION-->

<section class="container mt-4">
    <h1 class="page-header-title main-font text-light mt-3 py-4">Meus Cursos</h1>
    <div class="row">
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray shadow-sm">
                <a href="/student/course" class="nav-link p-0" id="link-hover">
                    <div class="card-header card-header-user-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                    <div class="card-body main-font text-light text-left">
                        <h1 class="pt-3">Interface UI/UX</h1>
                    </div>
                </a>
                <div class="card-footer pb-0 border-0">
                    <p class="lead text-light float-left">Estatísticas</p>
                    <a href="#" data-toggle="modal" data-target="#analytic-modal" class="float-right main-font font-weight-bold">
                        <i class="fa fa-2x fa-exclamation-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray shadow-sm">
                <a href="/student/course" class="nav-link p-0" id="link-hover">
                    <div class="card-header card-header-user-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                    <div class="card-body main-font text-light text-left">
                        <h1 class="pt-3">Interface UI/UX</h1>
                    </div>
                </a>
                <div class="card-footer pb-0 border-0">
                    <p class="lead text-light float-left">Estatísticas</p>
                    <a href="#" data-toggle="modal" data-target="#analytic-modal" class="float-right main-font font-weight-bold">
                        <i class="fa fa-2x fa-exclamation-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 mb-2 py-4">
            <div class="card h-100 bg-gray shadow-sm">
                <a href="/student/course" class="nav-link p-0" id="link-hover">
                    <div class="card-header card-header-user-padding" style="background: url('https://s.udemycdn.com/home/top-categories/lohp-category-photography.jpg') center center; background-size: cover;"></div>
                    <div class="card-body main-font text-light text-left">
                        <h1 class="pt-3">Interface UI/UX</h1>
                    </div>
                </a>
                <div class="card-footer pb-0 border-0">
                    <p class="lead text-light float-left">Estatísticas</p>
                    <a href="#" data-toggle="modal" data-target="#analytic-modal" class="float-right main-font font-weight-bold">
                        <i class="fa fa-2x fa-exclamation-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div><!--row-->
    <!-- <nav aria-label="Page navigation example" class="py-4">
        <ul class="pagination justify-content-end main-font">
            <li class="page-item disabled">
                <a class="page-link bg-too-dark text-light" href="#" tabindex="-1">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link bg-too-dark text-light" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-too-dark text-light" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-too-dark text-light" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link bg-array text-light" href="#">Próximo</a>
            </li>
        </ul>
    </nav> -->
</section>
<hr class="border-secondary mt-5">
<section class="container">
    <div class="row">
        <div class="col-md-6 mb-4 py-4">
            <h1 class="page-header-title main-font text-light py-4">Novidades</h1>
            <div class="card card-content-top bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. porro repellendus maxime eius.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4 py-4">
            <h1 class="page-header-title main-font text-light py-4">Blog</h1>
            <div class="card card-content-top bg-gray">
                <div class="card-body main-font font-weight-bold pl-xl-4">
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. porro repellendus maxime eius.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="analytic-modal" tabindex="-1" role="dialog" aria-labelledby="analytic-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="analytic-modalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
