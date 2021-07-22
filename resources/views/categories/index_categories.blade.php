@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4 text-center">LISTA DE CATEGORIAS</h1>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-block btn-primary" href="{{ route("category.create") }}">Crear Nueva Categoria</a>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a class="btn btn-sm btn-block btn-warning" href="{{ route("category.edit", $category->id) }}"> Editar </a>
                                    </div>
                                    <div class="col-md-3">
                                        <form role="form" action="{{ route("category.destroy", $category->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-sm btn-block btn-danger"> Eliminar </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection