<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <title>Reservacion</title>


</head>
<body>

    <h2>Reservacion</h2>

        <form action="/reservation/{{ $reservation->id}}" method="post">
        @csrf
        @method('patch')
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach

        <!-- encriptar datos -->
        <label for="nombre"> Nombre: </label>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $reservation->nombre }}">
        <br><br>
        
        <label for="correo"> Correo: </label>
        <input type="email" name="correo" value="{{ $reservation->correo}}">
        <br><br>
        
        <label for="telefono"> Telefono: </label>
        <input type="text" name="telefono" value="{{ $reservation->telefono}}">
        <br><br>
        
        <label for="personas"> Numero de personas: </label>
        <input type="number" name="personas" value="{{ $reservation->personas}}">
        <br><br>
        
        <label for="fecha"> fecha: </label>
        <input type="date" name="fecha" value="{{ $reservation->fecha}}">
        <br><br>
        
        <label for="hora"> Hora: </label>
        <input type="time" id="idHora" name="hora" value="{{ $reservation->hora}}" />
        <br><br>

        <input type="submit" value="Enviar" />

          
    </form>

</body>