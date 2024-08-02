<?php 
	if(isset($_POST["url"])){
		$input = $_POST["url"];
		$search = preg_quote("://","/");
		$pattern = "/$search/";
		if(preg_match($pattern, $input)){
			echo "Url Doğru" . $input . "<br>";
		}else{
				echo "Tekrar giriniz.";
			}
		}
	?>