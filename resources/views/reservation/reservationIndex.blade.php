@extends('layouts.reservation')
@section('reservation')
    
<body>
<html>

    <h1>Listado de Reservacion</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>N° Personas</th>
            <th>Fecha</th>
            <th>Hora</th>
        </tr>
        @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation -> id}}</td>
                <td>
                    <a href="/reservation/{{ $reservation->id }}">
                        {{ $reservation->nombre }}
                    </a>
                </td>
                <td>{{ $reservation -> correo  }}</td>
                <td>{{ $reservation -> telefono}}</td>
                <td>{{ $reservation -> personas}}</td>
                <td>{{ $reservation -> fecha }}</td>
                <td>{{ $reservation -> hora }}</td>

                <td>
                    <a href="/reservation/{{ $reservation->id }}/edit">Editar </a>               
                </td>
                <td>
                    <form action="/reservation/{{ $reservation->id }}" method="post">
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
