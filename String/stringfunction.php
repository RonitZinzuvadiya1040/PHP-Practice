<?php
$str = "Hello World!";

echo strlen("hi i am ronit zinzuvadiya") . "<br>"; 
echo strrev("hi i am ronit zinzuvadiya") . "<br>"; 
echo strtoupper("hi i am ronit zinzuvadiya") . "<br>";
echo strtolower("hi i am ronit zinzuvadiya") . "<br>";
echo str_word_count("hi i am ronit zinzuvadiya") . "<br>";
echo trim($str,"Hed!") . "<br>";
echo rtrim($str,"World!") . "<br>";
echo str_repeat("Wow",13) . "<br>";
echo str_replace("World", "Ronit", $str) . "<br>";
echo strcmp("Hello world!", "Hello World") . "<br>";
echo stripos("I love php, I love php too!","PHP") . "<br>";
echo stripos("I love java, I love php too!","PHP") . "<br>";
print_r (explode(" ",$str)); //explode break string into array
?>