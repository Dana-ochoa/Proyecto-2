@extends('layouts.orden')
@section('orden')
    
<body>
<html>

    <h1>Listado de Ordenes</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fecha inicio</th>
            <th>Fecha cierre</th>
            <th>Total</th>
            
        </tr>
        @foreach ($ordens as $orden)
            <tr>
                <td>
                    <a href="/orden/{{ $orden->mesa_id }}">
                        {{ $orden->mesa_id }}
                    </a>
                </td>
                <td>{{ $orden -> fecha_inicio }}</td>
                <td>{{ $orden -> fecha_cierre}}</td>
                <td>{{ $orden -> total}}</td>
             
               
                <td>
                    <form action="/orden/{{ $orden->mesa_id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input class="btn btn-secundary" type="submit" value="Eliminar">
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    
</body>
</html>
@endsection