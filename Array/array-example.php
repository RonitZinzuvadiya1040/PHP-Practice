<?php

//Indexed array

$subject = array("Hindi", "English", "Gujrati");
echo "I can speak $subject[0]. <br> I can write $subject[1]. <br> I can't read $subject[2].";
echo count($subject); //return array lengh
echo "<br><br>";

// associative array

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br><br>";

// Multidimensional Arrays

$cars = array(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// Array sorting

//Ex-1:
$ex1 = array("Volvo", "BMW", "Toyota");
sort($ex1);

//Ex-2:
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

//Ex-3: rsort
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

//Ex-4: asort
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

//Ex-5: ksort
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

//Ex-6 arsort:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

//Ex-7 krsort:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

?>