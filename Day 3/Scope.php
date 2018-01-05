<?php
require "include.php";
TopWrapper();
class Scope{
    public $num = 4; // Stays invisible cause variable is reassigned with 5 in function 
    function Scope(){
        $num = 5;
        echo "<P>this scope value of num is $num </p>";
    }
    
}

    $num = 3;
$aScope = new Scope();
echo "<h3>the Num value stays as $num </h3>";
BottomWrapper();
?>