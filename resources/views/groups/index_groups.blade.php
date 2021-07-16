@extends('layouts.app')

@section('content')

    <p>
        LOS GRUPOS ERAN PARA DARLE ROLES Y PERMISOS A LOS USUARIOS, AL MODIFICAR UN DETERMINADO GRUPO, SE MODIFICARÍA EL GRUPO AL QUE PERTENECEN TODOS LOS USUARIOS RELACIONADOS
    </p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{ 'GRUPOS' }}

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Nivel</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    {{--@foreach($GROUP as $group)--}}
                        <tbody>
                            <tr>
                                <td class="style:10%"><a href="#{{----}}"></a>adf</td>
                                <td>adfsadf</td>
                                <td>adf</td>
                                <td>adf</td>
                            </tr>
                        </tbody>
                    {{--@endforeach--}}
                </table>
            </div>
        </div>
    </div>

@endsection