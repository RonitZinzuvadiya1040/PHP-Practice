<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit(); // new object apple
$banana = new Fruit(); // new objecct banana
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_color('Red');
$banana->set_color('Yellow');

echo "Name: " . $apple->get_name() . " "; 
echo "Color: " . $apple->get_color();
echo "<br>";
echo "Name: " . $banana->get_name() . " ";
echo "Color: " . $banana->get_color();
echo "<br>";

?>
 
</body>
</html>