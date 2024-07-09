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
<form action="index6.php" method="post">
    Name : <input type="text" name="name">
    E-mail : <input type="email" name="email">
    Your Age : <select name="age">
        <?php
        $startage = 30;
        $lastage = 40;
        for ($i = $startage; $i <= $lastage; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <input type="submit"> <br>

</form>

</body>
</html>