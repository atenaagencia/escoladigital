@extends('layouts.site')

<style>

.m-b-md {
    margin-bottom: 30px;
}

.text-shadow{
    text-shadow: 2px 2px #ff0000;
}
</style>
@section('content')

<header class="mx-auto text-center p-5 h-50" style="background:linear-gradient(135deg, #E3E3E3 0%,#5D6874 100%); background: url('../img/okay.png') no-repeat center center fixed; background-size: cover;">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12 ml-auto py-5">
            <!-- <img src="{{asset('img/array_black.png')}}" width="40%" alt=""> -->
            <!-- <i class="fa fa-5x fa-laptop" style="background: -webkit-linear-gradient(#B06AB3, #4568DC);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i> -->
            <h1 class="display-4 mx-auto array-font font-weight-bold py-3">Onde alunos e professores se conectam.</h1>
            
            <div class="row justify-content-center py-3">
                <div class="col-12 col-md-10 col-lg-10">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Procure um curso aqui" style="border-radius: 30px">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success ml-5" type="submit">Procurar</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>

        </div>
    </div>
</header>

@endsection