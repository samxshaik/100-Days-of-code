<?php
require "include.php";

class Counted {
    
    public static $_count = 1;
    function __construct(){
        self::$_count++;
    }
       function __destruct(){
         self::$_count--;
   
}
    }
TopWrapper();

function Object(){
    $counted = new Counted();
    echo "Instances of counted: ". Counted::$_count ."<br/>";
}

echo "making three instances of counted with object()<br />";
Object();
Object();
Object();
echo "Outside of all call to makeObject, there are ".Counted::$_count . " instances of Counted. <br />";
echo "<br />";
echo "making \$count1<br />";
$count1 = new Counted();
echo "Instances of counted: " . Counted::$_count. "<br />";
echo "<br />";

echo "making \$count2<br />";
$count2 = new Counted();
echo "Instances of counted: " . Counted::$_count. "<br />";
echo "<br />";

echo "making \$count3<br />";
$count3 = new Counted();
echo "Instances of counted: " . Counted::$_count. "<br />";
echo "<br />";
BottomWrapper();


?>