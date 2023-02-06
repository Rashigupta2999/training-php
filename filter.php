<!DOCTYPE html>
<html>
<body>

<?php
//Remove all tags
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING); //remove tags i.e. h1
echo $newstr . "<br>";

//Check for integer number
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {  //check whether $int is integer
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//echo $email;

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

//Check for IP
echo "<br>";
$ip = "127.0.0.";

if (filter_var($ip, FILTER_VALIDATE_IP)) {   //check for valid ip
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}

echo "<br>";
//Check for valid URL
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>

</body>
</html>
