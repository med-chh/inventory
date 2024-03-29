@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center">CREAR CATEGORIA</h1>
                <form role="form" action="{{ route("category.store") }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Escribe el nombre de la categoria...">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary"> Registrar </button>
                        <a class="btn btn-block btn-danger" href="{{ route('category.index') }}"> Cancelar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection