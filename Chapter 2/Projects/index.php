<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	$text = "Benim adım ahmet rasim beyhan, ben bir yazılımcıyım.";
	$pattern = "/ahmet/";
	$result = preg_split($pattern, $text);
	echo "Orjinal icerik : " . $text . "<br>";
	echo "Yeni icerik : ";
	print_r($result);

 ?>
</body>
</html>