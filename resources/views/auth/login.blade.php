@extends('layouts.app')

<style>
.container#login{
    width: 100%;
    max-width: 900px !important;
    padding-top: 30px;  
}

.card-content-custom{
    /* border-top: 20px solid !important;  */
    border: 1px solid;
    /* border-image: linear-gradient(to left, #B06AB3, #4568DC) 1 !important; */
    border-radius: 3px;
}

::placeholder{
    color: white !important;
}

</style>

@section('content')
<div class="container main-font" id="login">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h1 class="text-light text-left main-font display-4 py-5">Acesse sua conta.</h1>
            <div class="card shadow">
                <div class="card-body card-content-custom bg-too-dark p-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto py-2 mt-3">
                                <label for="#" class="text-light">Email:</label>
                                <input placeholder="Insira seu email" id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-transparent text-light" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border-radius: 5px">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 mx-auto">
                                <label for="#" class="text-light">Senha:</label>
                                <input placeholder="Insira sua senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-transparent text-light" name="password" required autocomplete="current-password" style="border-radius: 5px">

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
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-light mt-3" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                 @endif
                            </div>
                        </div>

                        <div class="col-md-10 mx-auto py-4">
                            <div class="container mx-auto text-center text-light">
                                <p class="lead">Ainda não é cadastrado?</p>
                                <a href="{{ route('register') }}" class="btn btn-lg btn-block btn-primary font-weight-bold">crie sua conta.</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
