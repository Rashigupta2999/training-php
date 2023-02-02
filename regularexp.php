<!DOCTYPE html>
<html>
<body>

<?php
$str = "Visit W3Schools w3schools w3school";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);  //return 1 if fond otherwise 0
echo "<br>";
echo preg_match_all($pattern, $str);  //return numbers of time found data
echo "<br>";
echo preg_replace($pattern, "javatpoint", $str);
echo "<br>";

$str = "Apples and bananas.";
$pattern = "/pl(es){1}/i";   //group to search for pl followed by one instance of es , return 1 if have otherwise 0
echo preg_match($pattern, $str);

?>

</body>
</html>
