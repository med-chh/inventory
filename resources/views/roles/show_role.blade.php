@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h1 class="box-title">Detalles de Rol</h1>
                    </div>
                    <div class="box-body">
                        <dl class="row">
                            <dt class="col-md-6">Nombre: </dt>
                            <dd class="col-md-6">{{ $role->name }}</dd>
                        </dl>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-block btn-success" href="{{ route("role.index") }}"> Regresar </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection