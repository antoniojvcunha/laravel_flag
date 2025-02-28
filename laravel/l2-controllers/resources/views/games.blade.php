<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Games:</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Platform</th>
                <th>Release Date</th>
                <th>Developer</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td>{{ $game->id }}</td>
                <td><a href="games/{{ $game -> slug }}">{{ $game->title }}</a></td>
                <td>{{ $game->genre}}</td>
                <td>{{ $game->platform}}</td>
                <td>{{ $game->release_year}}</td>
                <td>{{ $game->developer}}</td>
                <td>{{ $game->rating}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>