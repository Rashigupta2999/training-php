<?php

//TWO WAYS TO ACCESS DECODED VALUES AS ARRAY

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

echo "<br>";

$arr1=  '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj,true);
echo $arr['Peter'];
echo $arr['Ben'];
echo $arr['Joe'];
?>
