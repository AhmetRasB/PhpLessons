<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 
	<form action="index.php" method="get">
		Sayıları giriniz arasında virgül olacak şekilde : <input type="text" name="text">
		<input type="submit" name="" value="Gönder">
	</form>
 <?php
 	if(isset($_GET['text'])){
 		$text = $_GET['text'];
 	$pattern = "/2/";
 	$sonuc = preg_filter($pattern, "1", $text);
 	print_r($sonuc);
 	}
  ?>
</body>
</html>