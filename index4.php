<?php
$var = true;
echo gettype($var);
echo "<br>";
$var = 42;
echo gettype($var); // Çıktı: integer
$var = 3.14;
echo gettype($var); // Çıktı: double
echo "<br>";
$var = array(1, 2, 3);
echo gettype($var); // Çıktı: array
echo "<br>";
class MyClass {}
$var = new MyClass();
echo gettype($var); // Çıktı: object
echo "<br>";
$var = fopen("test.txt", "r");
echo gettype($var); // Çıktı: resource

?>

