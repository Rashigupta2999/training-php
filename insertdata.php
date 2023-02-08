<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Myinfo (firstname, lastname, email)
VALUES ('Rashi', 'Gupta', 'rashi@gmail.com')";

$sql = "INSERT INTO Myinfo (firstname, lastname, email)
VALUES ('Shivansh', 'Gupta', 'shiv@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
