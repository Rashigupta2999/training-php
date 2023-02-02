<?php

   $fruits= array("mango ", "banana ", "Guava ", "Litchi ");
    echo "I love " .$fruits[0]. ", " .$fruits[1]. ", " .$fruits[2]. ", " .$fruits[3]. ".";
    echo "<br>";
    echo "Length of array is: ";
    $len=count($fruits);
    echo $len;
    echo "<br>";
    for($x = 0; $x < $len; $x++) {
        echo $fruits[$x];
        echo "<br>";
      }

$age= array("Rashi"=>"24","Shivansh"=>"23","Rishabh"=>"24", "Megha"=> "28");
//echo "Rashi is $age[Rashi] years old";  //OR
//echo "Rashi is " .$age['Rashi']. " years old";
echo "<br>";
foreach($age as $y => $value){
    echo "Key is =" . $y . " , Value is =" . $value;
    echo "<br>";
}
?>