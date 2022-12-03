@extends('layouts.reservation')
@section('reservation')

<body>

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
@endsection
</body>
</html>