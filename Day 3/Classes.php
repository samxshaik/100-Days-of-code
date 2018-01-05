<?php
require "include.php";
TopWrapper();

class Circle{
public $radius;
    function __construct($r) {
    $this->raidus=$r;
    }

function area(){
return 3.14 + $this->radius ** 2;
}
}
$radi = 5;
$aCircle = new Circle($radi);
echo "<p> the area of a circle with radius $radi is ". $aCircle->area(). "</P>";
BottomWrapper();

?>