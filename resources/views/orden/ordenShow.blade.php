@extends('layouts.orden')
@section('orden')

<html>
<body>
    <h1>Informacion ordenes</h1>
    
    <h2>{{N° Orden $orden->id }}</h2>

    <h3>

        Fecha inicio: {{ $orden->fecha_creacion}} <br>
        Fecha cierre: {{ $orden->fecha_cierre}} <br>
        Total: {{ $orden->total}} 
    </h3>
    
</body>
</html>
@endsection