<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" placeholder="First name" name="firstName">
        <br>
        <input type="text" placeholder="Last name" name="lastName">
        <br>
        <input type="email" placeholder="Email" name="email">
        <br>
        <input type="number" placeholder="Student number" name="studentNumber">
        <br>
        <input type="number" placeholder="Phone number" name="phoneNumber">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>