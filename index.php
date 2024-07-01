<!DOCTYPE html>
<html>
<head>
    <title>Square Calculator</title>
</head>
<body>



<form action="index.php" method="post">
    <input type="text" id="number" name="value">
    <input type="submit" value="Calculate">
    <?php
    if(is_numeric($_POST["value"])){
        $Deger = $_POST['value'];
        function square() {
            global $Deger;
            return $Deger * $Deger;
        }
        echo "<p>" . "The square of $Deger is " . square();
    }
    else{
        echo "<br>". "Please enter a number";
    }
    echo "<h1>---------------------------------------</h1>"

    ?>
</form>
</body>
</html>
