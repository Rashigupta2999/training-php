<?php
  define("greeting", "This is the example of constant"); // takes name,value, case-insensitive by default false
  echo greeting;
  echo "<br>";

  function myTest(){      //constants are global we can use under func as well
    echo greeting;
  }
  myTest();
 ?> 

