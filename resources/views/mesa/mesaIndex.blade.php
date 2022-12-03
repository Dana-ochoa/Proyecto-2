@extends('layouts.mesa')
@section('mesa')
    
<body>
<html>

    <h1>Listado Mesas</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Personas</th>
            <th>estado</th>
            <th>Hora inicio</th>
            <th>Hora cierre</th>
            
        </tr>
        @foreach ($mesas as $mesa)
            <tr>
                
                <td>
                    <a href="/mesa/{{ $mesa->id }}">
                        {{ $mesa->id }}
                    </a>
                </td>
                <td>{{ $mesa -> persona  }}</td>
                <td>{{ $mesa -> estado}}</td>
                <td>{{ $mesa -> created_at}}</td>
                <td>{{ $mesa -> updated_at }}</td>

                <!--<td>
                    <a href="/mesa/{{ $mesa->id }}/edit">Editar </a>               
                </td>-->
                <td>
                    <form action="/mesa/{{ $mesa->id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input class="btn btn-primary" type="submit" value="Eliminar">
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    
</body>
</html>
@endsection