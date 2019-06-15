@extends('layouts.signin')

@section('content')

<div class="d-block p-3 mb-2">
    <a href="#"><i class="material-icons float-left icon-sm">add</i> Cadastrar refrigerante</a>
    <div class="d-block float-right">
        <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control" placeholder="Digite para buscar" >
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="material-icons icon-sm">search</i></button>
            </div>
        </div>
    </div>
</div>
<div class="d-block bg-white rounded border p-3">

    <lista></lista>

</div> 
@endsection
