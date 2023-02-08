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

$sql = "INSERT INTO Myinfo (firstname, lastname, email)
VALUES ('Megha', 'Gupta', 'megha@gmail.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
