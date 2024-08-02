<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proje</title>
</head>
<body>
	<form action="index.php" method="get">
		URL yi giriniz : <input type="text" name="url">
		<input type="submit" value="Gönder">
	</form>
	<?php 
	if(isset($_GET["url"])){
		$input = $_GET["url"];
		$search = preg_quote("://","/");
		$pattern = "/$search/";
		if(preg_match($pattern, $input)){
			echo "URL Doğru " . $input . "<br>";
		}else{
				echo "Tekrar giriniz.";
			}
		}
	?>

</body>
</html>