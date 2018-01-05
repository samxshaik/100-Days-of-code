<?php
 $topwrapper = "<html><head></head><body>";
$bottomwrapper = "</body></html>";

echo "$topwrapper";
$num = 0;
//while loop
echo "<h3> \$num &lt = 5 </h3>";
while($num <= 5)
{
    echo"num is $num ";
   $num++;
}
//do-while
echo "<h3> \$num &lt = 0</h3>";
do
{
    echo "<h3> $num </h3>";
    $num++;}
   while($num < 5) ;

//for loop
echo "<h3> for each value \$num is decremented by 3</h3>";
    for($num; $num>0; $num--)
    {
        echo"<h3> $num</h3>";
    }



echo "$bottomwrapper";
?>