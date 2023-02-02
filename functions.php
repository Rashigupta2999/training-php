<?php declare(strict_types=1);   //strict requirement

    function mulNum(int $x, int $y){
             return $x+$y;
    }
    echo mulNum(20,20);  
    echo "<br>"; 
//echo mulNum(20,"20 hh");   //strict is not available so it adds string to number if available its not work
function myRef(&$value){    //passing argument by reference & used before variable name to be referenced
 $value += 4;
}
$num=2;
myRef($num);
echo "after adding number is $num";

?>