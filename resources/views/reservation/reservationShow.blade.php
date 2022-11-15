<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info reservation</title>
</head>
<body>
    <h1>Informacion Reservation</h1>
    <h2>{{ $reservation->nombre }}</h2>

    <p>
        {{ $reservation->correo}}
    </p>
</body>
</html>