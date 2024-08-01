<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		$text = "Selam ben ahmet nasılsınız iyisiniz umarım, bende iyiyim teşekkür ederim beni arayarak ulaşabilirsiniz adım ahmet unutmayın ahmet";
		$pattern = array("/ahmet/");
		$change = array("Hakan");
		$result = preg_filter($pattern,$change , $text);
		echo "Original Version : ".  $text . "<br>";
		echo "Changed Version : ". $result . "<br>";
	 ?>
</body>
</html>