<?php
$var = "8";
echo gettype($var);
settype($var, "integer");
echo "<br>";
echo $var;
echo gettype($var);
$variable = 123;

echo gettype($variable); // Çıktı: integer

if (is_int($variable)) {
    echo "Değişken bir tamsayıdır.";
} else {
    echo "Değişken bir tamsayı değildir.";
}

?>