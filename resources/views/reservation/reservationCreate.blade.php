<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <title>Reservation Create</title>
</head>
<body>
    <h1>Crear Reservacion</h1>

    <form action="/reservation" method="post">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <br><br>

        <label for="correo">Correo: </label>
        <input type="text" name="correo">
        <br><br>

        <label for="telefono">Telefono: </label>
        <input type="text" name="telefono">
        <br><br>

        <label for="personas">N° personas: </label>
        <input type="text" name="personas">
        <br><br>

        <label for="fecha">Fecha: </label>
        <input type="date" name="fecha">
        <br><br>

        <label for="hora">Hora: </label>
        <input type="time" name="hora">
        <br><br>

        <input type="submit" value="Guardar" />

    </form>
</body>
</html>