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
<form action="index7.php" method="get">
    Name : <input type="text" name="name"> <br>
    E-mail : <input type="email" name="email"> <br>
    Cinsiyetiniz : <input type="radio" name="Cinsiyet" value="Erkek"> Erkek <input type="radio" name="Cinsiyet" value="Kadın"> Kadın
    <br>
    Your Age : <select name="age">
        <?php
        $startage = 30;
        $lastage = 40;
        for ($i = $startage; $i <= $lastage; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        
        ?>
    </select> <br>
    <input type="submit"> <br>

</form>

</body>
</html>