<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	$GelenIsimDegeri = $_POST['ad'];
	$GelenSoyIsimDegeri = $_POST['soyad'];
	$GelenMail = $_POST['mail'];

	echo $GelenIsimDegeri . " " . $GelenSoyIsimDegeri . " " . $GelenMail;
 ?>
</body>
</html>