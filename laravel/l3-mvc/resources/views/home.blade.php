<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WElCOME HOME!</h1>

    @foreach($games as $game)
    <div>
        <a href="/games/{{ $game->slug }}">{{ $game->title }}</a>
        <form action="{{ route('home.deleteGame', $game->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">🗑️</button>
        </form>
    </div>
    @endforeach


</body>

</html>