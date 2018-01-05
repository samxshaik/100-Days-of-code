<?php
require "include.php";
TopWrapper();
$num = [1,2,3,4,5];
print_r($num);
echo "<h3> Number is $num[3]</h3>";

$colors = [ 1 => "green", 2 => "White", 3 => "Yellow"];
print_r($colors);
echo "<p>this page is in $colors[2]</p>";

$negative = [-1 => "worst", "emotional", "Feelings"];
print_r($negative);
echo "<h3>" . $negative[-1] ."</h3>";

$animal = ["cat" => "meow", "Dog" => "woof"];
print_r($animal);
echo "<h3> Dog says". $animal[Dog] ."</h3>";

echo "<h3>" . $num[4] . " Dogs chases a cat by hearing sound " . $animal[cat] ." and dogs barked ". $animal[Dog] . "</h3>";


BottomWrapper();
?>