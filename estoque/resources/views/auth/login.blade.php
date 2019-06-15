@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <!--<div class="card-header">{{ __('Login') }}</div>-->

                <div class="card-body">
                <center><img src="{{ asset('img/logo.svg') }}" class="mb-5" title="sistema de estoque" alt="logo" width="200" /></center>
=======
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168

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
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168

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
<<<<<<< HEAD
                                        {{ __('Lembrar-me') }}
=======
                                        {{ __('Remember Me') }}
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('Entrar') }}
=======
                                    {{ __('Login') }}
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
<<<<<<< HEAD
                                        {{ __('Esqueceu sua senha?') }}
=======
                                        {{ __('Forgot Your Password?') }}
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
