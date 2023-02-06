<?php
$age= array("Rashi"=>24, "Shivansh"=>23, "Megha"=>28);
echo json_encode($age);
echo "<br>";

//Decode
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
//The json_decode() function returns an object by default. The json_decode() function has a second parameter,
// and when set to true, JSON objects are decoded into associative arrays.
var_dump(json_decode($jsonobj));
echo "<br>";
var_dump(json_decode($jsonobj,true)); //when we use true it decoded into array

?>