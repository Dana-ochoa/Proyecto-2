@extends('layouts.reservation')
@section('reservation')

<body>
<html>

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

        <input class="btn btn-success" type="submit" value="Guardar" />

             
    </form>
</html> 
</body>
@endsection