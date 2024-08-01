<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	$Gelenler = $_GET;
	foreach ($Gelenler as $gelen => $value) {
		echo $value $gelen . "<br>";
	}

 ?>
</body>
</html>