@extends('layouts.reservation')
@section('reservation')

<html>
<body>
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
    
</body>
</html>
@endsection