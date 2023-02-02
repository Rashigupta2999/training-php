<?php
  $brand= array("2","4","1","5");
  sort($brand);
  $len=count($brand);
  //echo $len;
  for($x=0;$x<$len;$x++){
    echo $brand[$x];
    echo "<br>";
  }

  $company= array("Dell","HP","Lenovo","Mac");
  rsort($company);
   $c_len=count($company);
   for($y=0;$y<$c_len;$y++){
    echo $company[$y];
    echo "<br>";
   }

   $age= array("Rashi"=>"24","Shivansh"=>"23","Rishabh"=>"24", "Megha"=> "28");
   //asort($age);  //sort depends on value in ascending
   //ksort($age);     //sort depends on key in ascending
   arsort($age);     //sort depends value in descending
   //krsort($age);       //sort depends key in descending
   foreach($age as $a=> $value){
    echo "Key is =" .$a. ", Value is =" .$value;
    echo "<br>";
   }

 
?>