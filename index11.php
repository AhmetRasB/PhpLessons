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

    $GelenDosya = $_FILES["dosya"];
    $GelenDosyaYolu = $_FILES["dosya"]["tmp_name"];
    $GelenDosyaAdi = $_FILES["dosya"]["name"];
    $Yol = "Pictures/";
    $GelenDosyaYoluveAdi = $Yol.$GelenDosyaAdi;
    if(move_uploaded_file($GelenDosyaYolu, $GelenDosyaYoluveAdi)) {
        echo "Resim başarıyla yüklendi" . "<br>";
        echo "Resmin adı : " . $GelenDosyaAdi . "<br>";
        echo "Dosya yolu: " . $GelenDosyaYolu . "<br>";
        echo "<img src='$GelenDosyaYoluveAdi'> <br>'>";

    }
?>

<img src=""alt="">
</body>
</html>