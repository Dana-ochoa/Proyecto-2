@extends('layouts.platillo')
@section('platillo')

<html>
<body>
    <h1>Informacion platillos</h1>

    <h2>Nombre: {{ $platillo->nombre}} </h2>
   
    <h3>
        Precio: {{ $platillo->precio}}  <br>
        Cantidad: {{ $platillo->cantidad}}
    </h3>
    
</body>
</html>

@endsection