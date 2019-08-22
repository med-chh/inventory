@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h6>{{ 'LISTA DE PRODUCTOS' }}</h6>

                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio de compra</th>
                                <th>Precio de venta</th>
                                <th>Categoría</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--@foreach($PRODUCTS as $product)--}}
                            <tr>
                                <td class="style:10%"><a href="#{{-- route('') --}}"></a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection