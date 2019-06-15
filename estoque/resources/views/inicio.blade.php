@extends('layouts.signin')

@section('content')

<div class="d-block p-3">
    <a href="{{ route('cadastro') }}"><i class="material-icons float-left icon-sm">add</i> Cadastrar refrigerante</a>
    
</div>

<div class="d-block mb-5">
   <filtro></filtro>
</div>


<lista></lista>


@endsection
