<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	$text = array(12,22,32,43,52,62);
	$pattern = "/2/";
	$result	= preg_grep($pattern, $text); 
	echo "Orjinal hali : ";
	echo "<pre>";
	print_r($text) . "<br>";
	echo "<pre>";
	echo "Çakması : ";
	echo "<pre/>";
	print_r($result);

 ?>
</body>
</html>