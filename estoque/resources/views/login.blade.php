@extends('partials.header')

<div class="container">

    <div class="row justify-content-md-center justify-content-center">

        <div class="col-md-4 col-11 bg-white rounded shadow-sm p-5 mt-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img src="{{ asset('img/logo.svg') }}" class="mb-5" alt="logo sistema estoque" title="logo">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="material-icons">person</i></span>
                    </div>
                    <input type="text" id="user" class="form-control @error('user') is-invalid @enderror" required name="cmp_user" placeholder="Usuário" >
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="material-icons">lock</i></span>
                    </div>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha" >
                </div>

                <button class="btn btn-primary" type="submit">Entrar</button>
            </form>
        </div>

    </div>

</div>



