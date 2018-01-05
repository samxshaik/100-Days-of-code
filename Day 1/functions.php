<?php

function writeBold($str){
    echo "<b> $str </b>";
}
function writeTopWrapper(){
    echo"<html><head></head><body>";
}
function writeBottomWrapper(){
    echo "</body></html>";
}
writeTopWrapper();{
    echo"<p>";
writeBold("this text is Bold");
    echo"</p><p>this text is not bold</p>";
}
function add($a ,$b){
    return $a + $b;
}  
echo"<h3> the sum of 3 and 5 is " . add(3,5) . "</h3>";
writeBold("<P> the sum of 3 and 6 is "  . add(3, 6) . "</p>");
writeBottomWrapper();
?>