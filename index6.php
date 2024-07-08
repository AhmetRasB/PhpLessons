<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çerçeveli Form</title>
    <?php
        echo(mt_rand(10,20));
    ?>
</head>
<body>




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


    <?php

    ?>

</body>
</html>
