@extends('layouts.site')

<style>
.container#register{
    width: 100%;
    max-width: 900px !important;
    padding-top: 30px;  
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
    min-width: auto;
    max-width: 500px;
    /* margin-top: 75px !important; */
}
</style>

@section('content')

<div class="bg-too-dark flex-center position-ref full-height">
    <div class="content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-light text-left main-font display-4 py-5">Crie uma conta.</h1>
            <div class="form-group mb-3">
                <input placeholder="Insira um nome" id="name" type="text" class="form-control @error('name') is-invalid @enderror input-lg" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input placeholder="Insira um email" id="email" type="email" class="form-control @error('email') is-invalid @enderror input-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input placeholder="Insira uma senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror input-lg" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input placeholder="Repita sua senha" id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group row">
                <div class="mx-auto mt-3 p-3">
                    <p class="lead text-left text-light">Ao se registrar, você aceita nossos <a href="#" class="nav-link p-0 d-inline-block">termos de uso</a> e a nossa política de privacidade.</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-block btn-info main-font py-3 mt-3" style="max-width: 100%">{{ __('Registrar') }}</button>
                </div>
            </div>
        </form>
        
    </div>
</div>

@endsection
