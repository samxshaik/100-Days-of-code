<?php
require "include.php";
TopWrapper();

$greeting = "Hello";
$sayBye  = " see ya";

echo "<p>\" $greeting \" has " .strlen($greeting)."characters</p>";
echo "<p>\" $sayBye\" has " .str_word_count($sayBye)."words</p>";
echo "<p>\" $greeting\" backwards is  " .strrev($greeting)."</p>";


$word = "Have a nice day";
    if ($pos = strpos($sayBye, $word)){
        echo "<p>\"$word\" is at position $pos in \" $sayBye\"</p>";
    }
else{
    echo "<p>\"$word\" is not found in \"$sayBye \"</p>";
}
BottomWrapper();
?>

?>