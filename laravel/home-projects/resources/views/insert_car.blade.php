<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/insert_car" method="POST">
    @csrf
    <input type="text" name="marca" placeholder="Marca">
    <input type="text" name="modelo" placeholder="Modelo">
    <input type="number" name="ano" placeholder="Ano">
    <input type="number" name="preco" placeholder="Preço">
    <input type="text" name="cor" placeholder="Cor">
    <button type="submit">Enviar</button>
</form>

</body>
</html>