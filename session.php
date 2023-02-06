<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favchocalate"] = "5 Star";
$_SESSION["favanimal"] = "cat";
print_r($_SESSION);
echo "<br>";
$_SESSION["favanimal"] = "Dog";  //to chnge an session variable just overwrite it
print_r($_SESSION);
echo "<br>";
echo "Session variables are set.";
//session_unset()  remove all session variables
//session_destroy()
?>

</body>
</html>
