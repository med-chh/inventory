@extends("layouts.app")

@section("content")
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4 text-center">LISTA DE ROLES</h1>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-block btn-primary" href="{{ route("role.create") }}">Crear Nuevo Rol</a>
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
                        @foreach($roles as $role)
                        <tr>
                            <td class="style:10%"><a class="btn btn-sm btn-block btn-success" href="{{ route("role.show", $role->id) }}">{{ $role->id }}</a></td>
                            <td class="style:60%">{{ $role->name }}</td>
                            <td class="style:30%">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a class="btn btn-sm btn-block btn-warning" href="{{ route("role.edit", $role->id) }}"> Editar </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <form role="form" action="{{ route("role.destroy", $role->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-sm btn-block btn-danger"> Elimnar </button>
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