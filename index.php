<!DOCTYPE html>
<html>
<head>
    <title>Square Calculator</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="Unit">
    <br>
    <br>
    <input type="text" name="Amount">
    <br>
    <br>
    <input type="submit" name="Send">
</form>

<?php
    $Unit = $_POST['Unit'];
    $Amount = $_POST['Amount'];
    if(isset($_POST['Unit']) and isset($_POST['Amount']) and is_numeric($_POST['Amount']) and is_string($_POST['Unit'])){
        function Currency($Unit,$Amount){
            if($Unit == "Dollar"){
                $ExchangeRate = 4;
            }elseif($Unit == "Euro"){
                $ExchangeRate = 8;
            }elseif($Unit == "Turkish Lira"){
                $ExchangeRate = 12;
            }elseif($Unit == "Pound"){
                $ExchangeRate = 10;
            }
            return Calculate($Amount,$ExchangeRate);
        }
        function Calculate($Amount,$ExchangeRate){
            $Conclusion = $Amount*$ExchangeRate;

            echo "<br>"."Your exchange conclusion is : " . $Conclusion;
        }
        Currency($Unit,$Amount);
    }else{
        echo "Please enter unit and amount correctly ";
    }



?>
</form>
</body>
</html>
