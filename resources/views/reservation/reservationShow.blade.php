<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
   <div class="container"> 
    <h1>Informacion de la reservacion</h1>
    @if(isset($message))
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Bien hecho!</h4>
        {{ $message }}
        <p class="mb-0">No olvides llevar tu comprobante</p>
    </div>
    @endif
    <h2>{{ $reservation->nombre }}</h2>

    <h3>

        Fecha: {{ $reservation->fecha}} <br>
        Hora: {{ $reservation->hora}} 
    </h3>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>