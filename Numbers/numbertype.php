<?php

$int = 10;
var_dump($int);
var_dump(is_int($int));

echo "<br>";

$float = 10.5;
var_dump($float);
var_dump(is_float($float));

echo "<br>";

$string = "Hello World!";
var_dump($string);
var_dump(is_string($string));

echo "<br>";

$x = 1.9e411;
var_dump($x);

echo "<br>";

$x = acos(8);
var_dump($x);

echo "<br>";

$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

echo "<br>";

?>

<!-- PHP Casting Strings and Floats to Integers -->

<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>