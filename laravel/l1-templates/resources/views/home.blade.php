<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($fruit as $value)
        <li>{{ $value }}</li>
        @endforeach
    </ul>

    <!-- <ul>
        @foreach ($sites as $value)
        <li><a href="https://www.{{$value}}.com">{{ $value }}</a></li>
        @endforeach
    </ul> -->

    <h2>Sites:</h2>
    <ul>
        @foreach ($sites as $key => $value)
        <li><a href="{{$value}}">{{ $key }}</a></li>
        @endforeach
    </ul>

</body>

</html>