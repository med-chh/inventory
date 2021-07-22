@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-8'>
                <h1 class="display-4 text-center">Editar Rol</h1>
                <form role="form" action="{{ route("role.update", $role->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="name">Nombre: </label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary"> Editar </button>
                    <a class="btn btn-block btn-danger" href="{{ route("role.index") }}"> Cancelar </a>
                </form>
            </div>
        </div>
    </div>

@endsection