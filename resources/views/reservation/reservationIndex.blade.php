<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <title>Listado</title>
</head>
<body>
    
    <h1>Listado de reservaciones</h1>

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
                <td>{{ $reservation -> nombre }}</td>
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
                    <a href="/reservation/{{ $reservation->id }}/edit">Editar: </a>               
                </td>
                <td>
                    <form action="/reservation/{{ $reservation->id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Eliminar">
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
</body>
</html>