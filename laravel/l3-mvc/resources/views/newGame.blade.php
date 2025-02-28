<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form for a new game!</h1>

    <form action="newgamehandler" method="POST">
        @csrf
        <input name="title" placeholder="title">
        <input name="slug" placeholder="url slug">
        <button>Submit</button>   
     </form>
</body>
</html>