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
    $Icerik = " Ben Ahmet Nasılsınız İyimisiniz";
    $Pattern = "/^Ahmet/";
    $Sonuc = preg_match_all($Pattern, $Icerik);
    if($Sonuc == 1){
        echo "Mevcuttur";
    }
    else{
        echo "Mevcut Değildir.";
    }
?>
</body>
</html>