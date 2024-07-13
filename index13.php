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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $GelenDosyalar = $_FILES["Dosyalar"];
    $GelenDosyaAdlari = $GelenDosyalar["name"];
    $GelenDosyaTurleri = $GelenDosyalar["type"];
    $GelenDosyaBoyutlari = $GelenDosyalar["size"];
    $GelenDosyaGeciciAdlari = $GelenDosyalar["tmp_name"];

    foreach ($GelenDosyaAdlari as $index => $GelenDosyaAdi) {
        $dosyaTuru = $GelenDosyaTurleri[$index];
        $dosyaBoyutu = $GelenDosyaBoyutlari[$index];
        $dosyaGeciciAdi = $GelenDosyaGeciciAdlari[$index];

        echo "Dosya Adı: " . htmlspecialchars($GelenDosyaAdi) . "<br>";
        echo "Dosya Türü: " . htmlspecialchars($dosyaTuru) . "<br>";
        echo "Dosya Boyutu: " . htmlspecialchars($dosyaBoyutu) . " bytes<br>";
        echo "Geçici Adı: " . htmlspecialchars($dosyaGeciciAdi) . "<br><br>";
    }
}
?>
</body>
</html>
