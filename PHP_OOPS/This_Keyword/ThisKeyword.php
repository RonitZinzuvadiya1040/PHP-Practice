<!-- The $this keyword refers to the current object, and is only available inside methods. -->
<!-- So, where can we change the value of the $name property? There are two ways: -->

<!-- way-1: Inside the class (by adding a set_name() method and use $this): -->

<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo "Way-1: Inside the class (by adding a set_name() method and use this).";
echo "<br>";
echo $apple->name;
echo "<br><br>";
?>

<!-- way-2: Outside the class (by directly changing the property value): -->

<?php
class Fruits {
  public $name;
}
$apple = new Fruits();
$apple->name = "Apple";

echo "Way-2: Outside the class (by directly changing the property value).";
echo "<br>";
echo $apple->name;
echo "<br><br>";
?>

<!-- PHP - instanceof: You can use the instanceof keyword to check if an object belongs to a specific class: -->

<?php
$graps = new Fruit();
var_dump($graps instanceof Fruit);
?>

