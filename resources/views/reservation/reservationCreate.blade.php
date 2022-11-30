<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Reservation Create</title>
</head>
<body>
    <div class="container">
        <h1>Crear Reservacion</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/reservation" method="post">
            @csrf
            <label for="nombre">*Nombre: </label>
            <input type="text" name="nombre" required>
            <br><br>

            <label for="correo">Correo: </label>
            <input type="text" name="correo">
            <br><br>

            <label for="telefono">*Telefono: </label>
            <input type="text" name="telefono" required>
            <br><br>

            <label for="personas">N° personas: </label>
            <input type="text" name="personas">
            <br><br>

            <label for="fecha">*Fecha: </label>
            <input type="date" name="fecha" required>
            <br><br>

            <label for="hora">*Hora: </label>
            <input type="time" name="hora" required>
            <br><br>

            <input class="btn btn-success" type="submit" value="Guardar" />

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>