@extends('layouts.signin')

@section('content')
    
<div class="d-block p-3 mb-2">
    <a href="{{ route('home') }}"><i class="material-icons float-left icon-sm">arrow_back</i> Voltar</a>
</div>

<div class="d-block bg-white rounded border p-3">
    <edicao csrf="{{csrf_token()}}" :source="{{ $id }}"></edicao>
</div>

@endsection