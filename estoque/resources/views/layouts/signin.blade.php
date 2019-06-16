<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            .icon-sm { font-size: 18px; }
            .table thead td { border-top:0px !important; }
        </style>

        <script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        
    </head>
    <body>
        <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mt-2 mb-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.svg') }}" class="mr-2" width="30" height="30" alt="">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
           
            </ul>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
        </div>
        </nav>

        <div id="app">
        @yield('content')
        </div>


        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>