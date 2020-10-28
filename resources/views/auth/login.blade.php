@extends('layouts.site')

<style>

/* ::placeholder{
    color: white !important;
} */

.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

.full-height {
    height: 100vh;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}
.content {
    text-align: center;
    min-width: 400px;
    max-width: 900px;
    /* margin-top: 75px !important; */
}
</style>

@section('content')

<div class="bg-too-dark flex-center position-ref full-height">
    <div class="content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-light text-left main-font display-4 py-5">Acesse sua conta.</h1>
            <div class="form-group mb-3">
                <input placeholder="Insira seu email" id="email" type="email" class="form-control @error('email') is-invalid @enderror input-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input placeholder="Insira sua senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror input-lg" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <span class="button-checkbox">
                @if (Route::has('password.request'))
                <a class="btn btn-link text-light mt-3" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
                @endif
            </span>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <button type="submit" class="btn btn-block btn-success main-font py-3 mt-3" style="max-width: 100%">{{ __('Entrar') }}</button>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <a href="{{ route('register') }}" class="btn btn-block btn-info main-font py-3 mt-3" style="max-width: 100%">{{ __('Registrar') }}</a>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection
