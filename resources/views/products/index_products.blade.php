@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-8'>
                <h1 class="display-4 text-center">LISTA DE PRODUCTOS</h1>
                <table class='table'>
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio de compra</th>
                            <th scope="col">Precio de venta</th>
                            <th scope="col">Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class='style:10%'><a class="btn btn-sm btn-block btn-success" href="{{ route('product.show', $product->id) }}">{{ $product->id }}</a></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->buy_price }}</td>
                            <td>{{ $product->sale_price }}</td>
                            <td>{{ $product->category_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection