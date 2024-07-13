<form action="index2.php" method="post">
    <input type="text" name="BankName">
    <input type="submit" name="Send" value="Sent">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $BankName = $_POST['BankName'];
    $Bank1 = "Garanti";
    $Bank2 = "Master";
    $Bank3 = "Visa";

    function Installment($BankName, $Bank1, $Bank2, $Bank3) {
        if ($BankName == $Bank1) {
            echo "12 Taksit için sepet tutarınız 1000<br>";
            echo "12 Taksit için sepet tutarınız 2000<br>";
            echo "12 Taksit için sepet tutarınız 3000<br>";
        } elseif ($BankName == $Bank2) {
            echo "12 Taksit için sepet tutarınız 3300<br>";
            echo "12 Taksit için sepet tutarınız 3400<br>";
            echo "12 Taksit için sepet tutarınız 3500<br>";
        } elseif ($BankName == $Bank3) {
            echo "12 Taksit için sepet tutarınız 4000<br>";
            echo "12 Taksit için sepet tutarınız 5000<br>";
            echo "12 Taksit için sepet tutarınız 6000<br>";
            echo "12 Taksit için sepet tutarınız 7000<br>";
            echo "12 Taksit için sepet tutarınız 8000<br>";
            echo "12 Taksit için sepet tutarınız 9000<br>";
        } else {
            echo "Geçersiz banka adı.";
        }
    }

    Installment($BankName, $Bank1, $Bank2, $Bank3);
}
?>
