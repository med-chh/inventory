@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center">Crear Usuario</h1>
                <form role="form" action="{{ route("user.store") }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Escribe tu nombre completo...">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu email...">
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Escribe tu contraseña...">
                        </div>
                        <div class="form-group">
                            <label for="role_id">Rol: </label>
                            <select class="custom-select" name="role_id" id="role_id">
                                <option selected>Elige un rol...</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary"> Registrar </button>
                        <a class="btn btn-block btn-danger" href="{{ route('user.index') }}"> Cancelar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection