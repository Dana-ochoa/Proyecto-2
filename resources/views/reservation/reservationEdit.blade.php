<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Reservacion</title>


</head>
<body>
    <div class="container">

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

    </div>


          
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>