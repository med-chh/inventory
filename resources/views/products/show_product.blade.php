@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h1 class="box-title">Detalles de Producto</h1>
                    </div>
                    <div class="box-body">
                        <dl class="row">
                            <dt class="col-sm-6">Nombre: </dt>
                            <dd class="col-sm-6">{{ $product->name }}</dd>
                            <dt class="col-sm-6">Cantidad: </dt>
                            <dd class="col-sm-6">{{ $product->quantity }}</dd>
                            <dt class="col-sm-6">Precio de Compra: </dt>
                            <dd class="col-sm-6">{{ $product->buy_price }}</dd>
                            <dt class="col-sm-6">Precio de Venta: </dt>
                            <dd class="col-sm-6">{{ $product->sale_price }}</dd>
                            <dt class="col-sm-6">Categoria: </dt>
                            <dd class="col-sm-6">{{ $product->category_id }}</dd>
                            <dt class="col-sm-6">Fecha de Creación: </dt>
                            <dd class="col-sm-6">{{ $product->created_at }}</dd>
                            <dt class="col-sm-6">Fecha de Actualización: </dt>
                            <dd class="col-sm-6">{{ $product->updated_at }}</dd>
                        </dl>
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="btn btn-sm btn-block btn-primary" href="{{ route("product.index") }}">Regresar</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-sm btn-block btn-success" href="{{ route("product.edit", $product->id) }}">Editar</a>
                            </div>
                            <div class="col-md-3">
                                <form role="form" action="{{ route('product.destroy', $product->id) }}" method="POST">
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