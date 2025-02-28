<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Combustível</th>
                <th>Preço</th>
                <th>Cilindrada</th>
                <th>Cavalos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
            <tr>
                <td>{{ $carro -> id }}</td>
                <td><a href="carros/{{ $carro -> slug }}">{{ $carro -> marca }}</a></td>
                <td>{{ $carro -> modelo }}</td>
                <td>{{ $carro -> combustivel }}</td>
                <td>{{ $carro -> preco }}</td>
                <td>{{ $carro -> cilindrada }}</td>
                <td>{{ $carro -> cavalos }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>