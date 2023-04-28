<?php 

function jump(){
	echo "Jump function Called! <br>";
}

function family($name){
	echo "$name is invited!!<br>";
}

function familywithsize($name, $size){
	echo "$name familty has $size members in their family!!<br>";
}

jump();
family("Zinzuvadiya");
familywithsize("Merja", "50");
familywithsize("Dholakiya", "100");

?>

<!-- Loosely Typed Language -->
<?php
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>