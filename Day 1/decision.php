<?php
    
    echo "<html><head><title>Decisions</title></head><body>" ;
     $num = 5;
   //if statement
echo "<h2> running if statement</h2>";
if($num >2){
    echo "<h3> num is $num greater than 2</h3>";
}
//if-else statement
echo "<h2> running if-else statement</h2>";
if($num <= 1){
    echo "<h3> num is $num less than or equal to 1 </h3>";
}
 else{
     echo "<h3> num is $num greater than or qual to 1</h3>";
 }
//if-else-if statements 
     
echo "<h2> running if-else-if statements</h2>";
if($num === 5.4){
    echo "<h3> num is equal to 5.4 </h3>";
}
elseif($num >= 0){
    echo "<h3> num is equal to $num </h3>";
}
else {
    echo "<h3> num is equal but it doesnt have same  type</h3>";
}
//switch statements
echo "<h2> running switch statements</h2>";
switch($num)
{
        case 1:
        echo "<h3> one</h3>";
        break;
        case 2:
        echo "<h3>two</h3>";
        break;
        case 5:
        echo "<h3> five</h3>";
    default:
        echo"<h3> Something</h3>";
}
echo "</body></html>"
 ?>