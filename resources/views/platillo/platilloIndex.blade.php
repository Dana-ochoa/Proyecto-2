@extends('layouts.platillo')
@section('platillo')
    <h1>Listado platillos</h1>

<body>
<html>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        @foreach ($platillos as $platillo)
            <tr>
                <td>{{ $platillo -> id}}</td>
                <td>
                    <a href="/platillo/{{ $platillo->id }}">
                        {{ $platillo->nombre }}
                    </a>
                </td>
                <td>{{ $platillo -> precio}}</td>
                <td>{{ $platillo -> cantidad}}</td>
                
                <td>
                    <form action="/platillo/{{ $platillo->id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input class="btn btn-success" type="submit" value="Eliminar">
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    
</body>
</html>
@endsection