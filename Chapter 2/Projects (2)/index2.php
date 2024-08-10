<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
   $Deger = "Merhaba ben ahmet ben php yazılımcısıyım. beni facebook üzerinden AhMeT  AHMET Ahmeet ahmet rasim şeklinde aratarak bulabilirsiniz.";
   $pattern = "/ahmet/i";
   preg_match_all($pattern, $Deger, $Sonuc);
   echo "Orjinal içerik". $Deger;
   echo "<pre>";
   print_r($Sonuc);
   echo "<pre/>";
	 ?>
</body>
</html>