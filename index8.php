<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index9.php" method="get">
    Your Name-Surname : <input type="text" name="name">
    <br>
    Your hobbies : <br> <input type="checkbox" name="hobbies[]" value="shopping"> Shopping
    <br>
    <input type="checkbox" name="hobbies[]" value="red" />
    <label for="color_red">Red</label>
    <br>
    <input type="checkbox" name="hobbies[]" value="walking" /> Walking

    <br>
    <input type="checkbox" name="hobbies[]" value="mobilegame" /> Playing Game
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>