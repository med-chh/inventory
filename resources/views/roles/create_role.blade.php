@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center">Crear Rol</h1>
                <form role="form" action="{{ route("role.store") }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre del Rol</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Escribe el nombre del rol...">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary"> Registrar </button>
                        <a class="btn btn-block btn-danger" href="{{ route("role.index") }}"> Cancelar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection