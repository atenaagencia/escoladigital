@extends('layouts.admin')

<style>
.container#login{
    width: 100%;
    max-width: 900px !important;
    padding-top: 30px;  
}
</style>

@section('content')
<div class="container main-font" id="login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-light text-center main-font display-4 py-4">Array</h1>
            <div  class="text-light text-center">ACESSO ADMINISTRATIVO</div>
            <div class="card border-0">
                <div class="card-body bg-too-dark border-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <div class="col-md-9 mx-auto mt-4">
                                <input placeholder="Insira seu email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto">
                                <input placeholder="Insira sua senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-4">
                            <div class="col-md-9 mx-auto">
                                <button type="submit" class="btn btn-custom btn-block btn-custom-2" style="max-width: 100%">{{ __('Entrar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
