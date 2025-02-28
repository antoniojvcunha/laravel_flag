<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ url('postgame')">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="genre" placeholder="genre">
        <input type="text" name="platform" placeholder="platform">
        <input type="date" name="release_date">
        <input type="number" step=".1" min=0 max=10 name="developer" placeholder="developer">
        <br>
        <button>Submit</button>
    </form>
</body>

</html>