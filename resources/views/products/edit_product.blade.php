@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center"> EDITAR PRODUCTO </h1>
                <form role="form" action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Cantidad: </label>
                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $product->quantity }}">
                        </div>
                        <div class="form-group">
                            <label for="buy_price">Precio de Compra</label>
                            <input type="number" class="form-control" name="buy_price" id="buy_price" value="{{ $product->buy_price }}">
                        </div>
                        <div class="form-group">
                            <label for="sale_price">Precio de Venta: </label>
                            <input type="number" class="form-control" name="sale_price" id="sale_price" value="{{ $product->sale_price }}">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Categoria: </label>
                            <select class="custom-select" name="category_id" id="category_id">
                                <option value="{{ $product->category_id }}" selected>{{ $product->category_id }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="media_id" id="media_id" value="1">
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary"> Editar </button>
                        <a class="btn btn-block btn-danger" href="{{ route('product.show', $product->id) }}"> Cancelar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection