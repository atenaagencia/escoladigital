@extends('layouts.app')

<style>
.container#register{
    width: 100%;
    max-width: 900px !important;
    padding-top: 30px;  
}
</style>
@section('content')
<div class="container main-font" id="register">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h1 class="text-light text-center main-font display-4 py-5">Crie sua conta.</h1>
            <div class="card rounded-0 shadow">
                <div class="card-body card-content-custom rounded-0 bg-white shadow p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto mt-3">
                                <label for="#">Nome:</label>
                                <input placeholder="Insira seu nome" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto">
                                <label for="#">E-mail:</label>
                                <input placeholder="Insira seu email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto">
                                <label for="#">Senha:</label>
                                <input placeholder="Crie uma senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto">
                                <label for="#">Repita sua Senha:</label>
                                <input placeholder="Repita sua senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-9 mx-auto mt-3">
                                <p class="lead text-center">Ao se registrar, você aceita nossos termos de uso e a nossa política de privacidade.</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto">
                                <button type="submit" class="btn btn-primary py-3 btn-block" style="max-width: 100%">CADASTRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
