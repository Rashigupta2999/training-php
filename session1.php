<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);  //print array()  OR we can use 
//echo "Your favourite chocalate is " . $_SESSION["favchocalate"]. "<br>";
//echo "Your favourite Animal is " . $_SESSION["favanimal"]. "<br>";

?>
</body>
</html>