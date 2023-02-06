<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day, expired in 30days
// / means cookie is available n entire website
//setcookie("user", "", time() - 3660);  //set the expiration date for 1 hr to delete the cookie , 1hr= 3600 sec

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}

?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>
