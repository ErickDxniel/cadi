@extends('layouts.plantilla')

@section('title', 'Inicia Sesión')

@section('content')


<section style="padding: 1% 5% 2% 5%">

    
    {{-- FORM NATIVO --}}

    {{-- <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header">{{ __('Inicia Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div> --}}

    {{-- FORM NATIVO EDITADO --}}

<div class="row">
        
    <div class="col-md-4 offset-md-4">
            
            <div class="login-form bg-oestemaderas mt-4 p-4 card">
                
                    <form method="POST" action="{{ route('login') }}" class="row g-3">
                        
                        <h4>{{ __('Inicia Sesión') }}</h4>

                        <hr>

                        @csrf

                        <div class="col-12">
                            
                            <label>{{ __('Correo Electronico') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="col-12">
                            <label for="password">{{ __('Contraseña') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-12">
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            
                        </div>

                        <div class="col-12 text-center">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>
                            
                        </div>

                    </form>

                    <hr class="mt-4">

                    <div class="col-12 text-center" >

                        @if (Route::has('password.request'))
                                <a class="btn btn-link text-oeste-maderas" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                        @endif

                    </div>
            
            </div>
        </div>
</div>

{{-- FORM EXTRAIDO DE BOOTSTRAP 5 --}}

    {{-- <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <form action="" method="" class="row g-3">
                    <h4>Bienvenido</h4>
                    <div class="col-12">
                        <label>Usuario</label>
                        <input type="text" name="username" class="form-control" placeholder="Ingresa Usuario">
                    </div>
                    <div class="col-12">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Ingresa Contraseña">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Recuerdame</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-dark btn-default">Ingresar</button>
                    </div>
                </form>
                <hr class="mt-4">
                <div class="col-12">
                    <p class="text-center mb-0">¿No tienes una cuenta? <a href="#">Registrate</a></p>
                </div>
            </div>
        </div>
    </div> --}}















</section>
@endsection
