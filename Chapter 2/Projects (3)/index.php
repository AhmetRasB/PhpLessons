<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$Metin = "Merhaba ben ahmet bu php kodum.";
$Pattern = "/P H P/ix";
preg_match($Pattern, $Metin, $sonuc);
echo "Original" . $Metin . "<br>";
echo "<pre>";
print_r($sonuc);
echo "<pre/>";
?>
</body>
</html>