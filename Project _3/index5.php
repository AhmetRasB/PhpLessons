<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type="submit"]{
            font-size: 20px;
            width: 300px; /* Buton genişliğini ayarlar */
            height: 40px; /* Buton yüksekliğini ayarlar */
            display: flex;
            justify-content: center; /* Metni yatay olarak ortalar */
            align-items: center; /* Metni dikey olarak ortalar */
            margin-top: 10px; /* Üstten boşluk ekler */
            text-align: center;
            padding: 0;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;

        }
        input[type="text"]::placeholder{
            text-align: center;


        }
        input[type="text"]{
            width: 300px;
            height: 40px;
            text-align: left; /* Placeholder'ı sola hizalar */
            font-size: 20px;
            display: flex;
            align-items: center; /*

        }
    </style>
</head>
<body>
<pre>
<form action="index5.php" method="post">
    <input type="text" name="var1" placeholder="Integer giriniz">
    <br>
    <input type="text" name="var2" placeholder="String giriniz">
    <br>
    <input type="text" name="var3" placeholder="Boolean giriniz">

        <input type="submit" name="Send" value="Gönder">

</form>
</pre>
<?php

    if(($_SERVER["REQUEST_METHOD"] == "POST") and (is_numeric($_POST["var1"]) and is_string($_POST["var2"]) and is_bool($_POST["var3"]))){
        $Integer = $_POST['var1'];
        $String = $_POST['var2'];
        $Boolean = $_POST['var3'];
        echo "<br>";
        echo gettype($Integer);
        echo gettype($String);
        echo gettype($Boolean);
    }else
        echo "<h1>Değerleri Tekrar Giriniz</h1>";
?>
</body>
</html>