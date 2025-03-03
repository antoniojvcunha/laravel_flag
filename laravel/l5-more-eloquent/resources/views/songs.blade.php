<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="background-color:gray; border:solid; ">
        <h1>Hello {{ $name }}</h1>
        <p>🌆: {{ $city }}</p>
        <p>🏠: {{ $streetAddress }}</p>
        <p>📍 LAT: {{ $latitude }}</p>
        <p>📍 LON: {{ $longitude }}</p>
        <p>💻: {{ $email }}</p>
        <p>☎️: {{ $phoneNumber }}</p>
        <p>💼: {{ $companyName }}</p>
    </div>

    <table border="1">
        @foreach($songs as $song)
        <tr>
            <td>{{ $song->title }}</td>
            <td>{{ $song->artist }}</td>
            <td>{{ $song->duration }}</td>
        </tr>
        @endforeach
    </table>


</body>

</html>