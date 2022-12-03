@extends('layouts.mesa')
@section('mesa')

<html>
<body>
    <h1>Informacion de la reservacion</h1>
    
    <h2>Mesa: {{ $mesa->id }}</h2>

    <h3>

        Personas: {{ $mesa->persona}} <br>
        Estado: {{ $mesa->estado}} <br> 
        
    </h3>
    
</body>
</html>
@endsection