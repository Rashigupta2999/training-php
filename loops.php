<?php
   $x= 0;
   while($x<5){   //while
    echo "$x is greater than 10 <br>";
    $x++;
   }
   echo "<br>";
   for($x=2;$x<=7;$x+=2){   //for
    echo " $x <br>";
   }
   echo "<br>";
   $y= 3;  
  do {    //do while
    echo "the number is $y <br>";
     $y++;
  }while($y<=8);
   echo "<br>";

   $colors= array("red", "green", "blue");   //create array
   foreach($colors as $values){   //foreach loop
    echo "The colour is $values <br>";
  }
?>