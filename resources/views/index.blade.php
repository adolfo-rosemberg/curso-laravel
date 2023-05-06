<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de juegos:</h1>
    @forelse ($games as $game)
        <li>{{$game}}</li>
    @empty
        <p>No hay juegos.</p>
    @endforelse
</body>
</html>