@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-8'>
                <h1 class="display-4 text-center"> EDITAR USUARIO </h1>
                <form role="form" action="{{ route("user.update", $user->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="role">Rol: </label>
                            <select class="custom-select" name="role_id" id="role_id">
                                <option value="{{ $user->role_id }}" selected>{{ $user->role->name }}</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary"> Editar </button>
                        <a class="btn btn-block btn-danger" href="{{ route("user.show", $user->id) }}"> Cancelar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection