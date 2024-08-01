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
<?php
    $getname = $_GET['name'];
    $getemail = $_GET['email'];
    $getgender = $_GET['Cinsiyet'];
    $getage = $_GET['age'];
    echo "Your name : " . $getname . "<br>";
    echo "Your email : " . $getemail . "<br>";
    echo "Your gender : " . $getgender . "<br>";
    echo "Your age : " . $getage . "<br>";

?>
</body>
</html>