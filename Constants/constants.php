<?php

// syntax
// define(name, value, case-insensitive);

define("PI" , 3.14);
echo PI;
echo "<br>";

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

// case-insensitive (true or false)
define("LEGION", "Welcome to Legion", false);
echo "legion";
echo "<br>";

?>

<!-- constant array -->

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
echo "<br>";
?>

<!-- constant are global -->

<?php
define("Hello", "Constant are global");

function myTest() {
  echo Hello;
}
 
myTest();
?>