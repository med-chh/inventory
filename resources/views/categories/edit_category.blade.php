@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center"> EDITAR CATEGORIA </h1>
                <form role="form" action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-group" name="name" id="name" value="{{ $category->name }}">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary"> Editar </button>
                        <a class="btn btn-block btn-danger" href="{{ route("category.index") }}"> Cancelar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection