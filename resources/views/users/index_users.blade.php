@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center">LISTA DE USUARIOS</h1>
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td scope="row" class='style:10%'><a class="btn btn-sm btn-block btn-success" href="{{ route('user.show', $user->id) }}">{{ $user->id }}</a></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- $users->links() --}}
            </div>
        </div>
    </div>

@endsection