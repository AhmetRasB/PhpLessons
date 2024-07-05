<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çerçeveli Form</title>
    <style>
        .container {
            border: 2px solid black; /* Çerçevenin kalınlığı ve rengi */
            padding: 20px;          /* Çerçeve içindeki boşluk */
            width: 300px;           /* Konteynerin genişliği */
            margin: 0 auto;         /* Ortalamak için */
            text-align: center;     /* Metin hizalaması */
        }
    </style>
</head>
<body>
<div class="container">
    <form action="index6.php" method="post">
        <input type="hidden" name="form" value="form1">
        <input type="text" name="test">
        <input type="submit" value="Gönder">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'form1') {
        $gelen = $_POST['test'];

        // Değerin float olup olmadığını kontrol et
        if (is_numeric($gelen)) {
            $gelenFloat = (float)$gelen;
            echo floor($gelenFloat);
        } else {
            echo "Lütfen geçerli bir sayı giriniz.";
        }

    }
    ?>
</div>

<div class="container">
    <form action="index6.php" method="post">
        <input type="hidden" name="form" value="form2">
        <input type="text" name="testt">
        <input type="submit" value="Gönder2">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'form2') {
        $gelen2 = $_POST['testt'];

        // Değerin float olup olmadığını kontrol et
        if (is_numeric($gelen2)) {
            $gelenFloat2 = (float)$gelen2;
            echo ceil($gelenFloat2);
        } else {
            echo "Lütfen geçerli bir sayı giriniz.";
        }

    }
    ?>
</div>
</body>
</html>
