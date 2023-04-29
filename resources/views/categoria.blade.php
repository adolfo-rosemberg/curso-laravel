<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($juegoCategoria)
        <h1>El juego es: {{$juego}} la categoria del juego es: {{ $juegoCategoria }}</h1>
    @else
        <h1>El juego es: {{$juego}}</h1>
    @endif

    {{$fecha}}
    
</body>
</html>