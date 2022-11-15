<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservacion</title>


</head>
<body>

    <h2>Reservacion</h2>

    
    <form action="/reservation" method="post">
        @csrf
        
        <!-- encriptar datos -->
        <label for="nombre"> Nombre: </label>
        <input type="text" name="nombre">
        <br><br>
        
        <label for="correo"> Correo: </label>
        <input type="email" name="correo">
        @error('email'){{ $message}} @enderror
        <br><br>
        
        <label for="telefono"> Telefono: </label>
        <input type="text" name="nomnre">
        <br><br>
        
        <label for="personas"> Numero de personas: </label>
        <input type="number" name="personas">
        <br><br>
        
        <label for="fecha"> fecha: </label>
        <input type="date" value="2022-10-03" name="fecha">
        <br><br>
        
        <label for="hora"> Hora: </label>
        <input type="time" id="idHora" name="hora" />
        <br><br>

        <input type="submit" value="Enviar" />

          
    </form>

</body>