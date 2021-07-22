@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h1 class="box-title">Detalles de Usuario</h1>
                    </div>
                    <div class="box-body">
                        <dl class="row">
                            <dt class="col-sm-6">Nombre: </dt>
                            <dd class="col-sm-6">{{ $user->name }}</dd>
                            <dt class="col-sm-6">Email: </dt>
                            <dd class="col-sm-6">{{ $user->email }}</dd>
                            <dt class="col-sm-6">Rol: </dt>
                            <dd class="col-sm-6">{{ $user->role->name }}</dd>
                            <dt class="col-sm-6">Estatus: </dt>
                            <dd class="col-sm-6">{{ $user->status }}</dd>
                            <dt class="col-sm-6">Fecha de Creación: </dt>
                            <dd class="col-sm-6">{{ $user->created_at }}</dd>
                            <dt class="col-sm-6">Fecha de Actualización: </dt>
                            <dd class="col-sm-6">{{ $user->updated_at }}</dd>
                        </dl>
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="btn btn-sm btn-block btn-primary" href="{{ route("user.index") }}">Regresar</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-sm btn-block btn-success" href="{{ route("user.edit", $user->id) }}">Editar</a>
                            </div>
                            <div class="col-md-3">
                                <form role="form" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-block btn-danger"> Eliminar </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection