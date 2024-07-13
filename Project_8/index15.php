<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!$_GET){  ?>
        <form action="index15.php" method="get"> 
        Adınızı Giriniz: <input type="text" name="ad"> <br>
        Soyadınızı Giriniz: <input type="text" name="soyad"> <br>
        Mail adresiniz: <input type="email" name="mail"> <br>
        <input type="submit">
    </form>
    <?php 
    }else{
        $Gelen = $_GET["ad"];
        $Gelen2 = $_GET["soyad"];
        $Gelen3 = $_GET["mail"];
        echo $Gelen . "<br>";
        echo $Gelen2 . "<br>";
        echo $Gelen3 . "<br>";
    }
    ?>
    
   

</body>
</html>